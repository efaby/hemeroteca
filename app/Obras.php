<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\TipoObras;
use Hemeroteca\Areas;
use Hemeroteca\TipoRegistro;
use Hemeroteca\Proveedores;
use Hemeroteca\ObraIsbn;
use DB;

class Obras extends Model
{
  public $timestamps = false;
  protected $table = 'obras';
  protected $fillable = ['autor','editorial','titulo','fecha_publicacion','fecha_registro','numeros_paginas','proveedor_idproveedor','tipos_obras_idtipos_obras','areas_idareas','tipo_registro_id','descripcion_obra'];

public function ListaRelacionadaTipoObras()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\TipoObras','tipos_obras_idtipos_obras','id');
    }
  
  public function ListaRelacionadaArea()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\Areas','areas_idareas','id');
    }

    public function ListaRelacionadaTipoRegistro()
    {
      //(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
      return $this->belongsTo('Hemeroteca\TipoRegistro','tipo_registro_id','id');
    }
    public function ListaRelacionadaProveedor()
    {
      //(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
      return $this->belongsTo('Hemeroteca\Proveedores','proveedor_idproveedor','id');
    }

  public function scopeBusqueda($query,$palabra)
  { 
    if(trim($palabra != ""))
    {

      $query->where('titulo',"LIKE","%$palabra%");

    }
  }
    public function scopeTipobras($query,$tipoobras)
  { 
    if(trim($palabra != ""))
    {

      $query->where('tipos_obras_idtipos_obras',$tipoobras);

    }
  }
  
  public function isbns()
  {
  	return $this->hasMany('Hemeroteca\ObraIsbn','obras_id')->where('estado_obras_id',1);
  }

  static public function scopeObtenerObras($query, $textoBuscar,$filtros){
  	
  //	$query = DB::table('obras');  
  	$query->distinct();
  	if(in_array('titulo', $filtros)){  		
  		$query->orWhere('titulo',"LIKE","%$textoBuscar%");
  	}
  	if(in_array('autor', $filtros)){
  		$query->orWhere('obras.autor',"LIKE","%$textoBuscar%");
  	}
  	if(in_array('area', $filtros)){
  		$query->join('areas', 'obras.areas_idareas', '=', 'areas.id');
  		$query->orWhere('areas.nombre_area',"LIKE","%$textoBuscar%");
  	}
  	if(in_array('isbn', $filtros)){
  		$query->orWhereExists(function ($query)  use ($textoBuscar){
                $query->from('obras_isbn')
                      ->whereRaw("obras_isbn.codigo_isbn LIKE '%$textoBuscar%'")  
                      ->whereRaw("obras_isbn.activo_pasivo = 'activo'");
            });
  	}
  	
  	return $query->paginate(env('LIMIT_LIST'));
            
  }
  
}

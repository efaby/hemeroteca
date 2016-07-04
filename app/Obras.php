<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\TipoObras;
use Hemeroteca\Areas;
use Hemeroteca\TipoRegistro;
use Hemeroteca\Proveedores;
use Hemeroteca\ObraIsbn;
;

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

}

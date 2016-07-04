<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\Obras;
use Hemeroteca\EstadoObra;



class ObraIsbn extends Model
{
  public $timestamps = false;
  protected $table = 'obras_isbn';
  protected $fillable = ['obras_id','estado_obras_id','codigo_isbn','activo_pasivo'];

public function isbnObras()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\Obras','obras_id','id');
    }
 public function ListaRelacionadaEstadoObra()
    {
      //(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
      return $this->belongsTo('Hemeroteca\EstadoObra','estado_obras_id','id');
    }

  public function scopeBusquedaisbn($query,$codigo)
  { 

      $query->where('codigo_isbn',$codigo);
  }

 public function scopeIsbnactivo($query)
  { 

      $query->where('activo_pasivo','activo');

  }  
public function scopeIsbnlibre($query,$libre)
  { 

      $query->where('estado_obras_id',$libre);

  } 
}

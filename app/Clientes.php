<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
     public $timestamps = false;
  protected $table = 'cliente';
   protected $fillable = ['nombre_cliente', 'apellido_cliente','cedula_cliente','email_cliente','direccion_cliente','telefono_cliente','celular_cliente','genero','activo_pasivo'];


public function scopeBusqueda($query,$palabra)
  { 

    if(trim($palabra != ""))
    {

      $query->where('cedula_cliente',"LIKE","%$palabra%");

    }
  }
public function scopeBusquedacliente($query,$palabra)
  { 

      $query->where('cedula_cliente',$palabra);


  }

 public function scopeClienteactivo($query)
  { 

      $query->where('activo_pasivo','activo');

  }

}

<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
   public $timestamps = false;
  protected $table = 'proveedor';
   protected $fillable = ['nombre_proveedor', 'cedula_proveedor','direccion_proveedor','telefono_proveedor','celular_proveedor','activo_pasivo'];
}

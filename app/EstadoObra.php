<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class EstadoObra extends Model
{
     public $timestamps = false;
  protected $table = 'estado_obras';
  protected $fillable = ['nombre_estado_historial','descripcion_estado_historial','activo_pasivo'];
}

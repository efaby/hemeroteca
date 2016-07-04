<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class TipoRegistro extends Model
{
    public $timestamps = false;
  protected $table = 'tipo_registro';
   protected $fillable = ['nombre_registro', 'descripcion_registro','activo_pasivo'];
}

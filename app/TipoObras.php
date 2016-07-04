<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class TipoObras extends Model
{
    public $timestamps = false;
  protected $table = 'tipos_obras';
   protected $fillable = ['nombre_tipos_obras', 'descripcion_tipos_obras','activo_pasivo'];
}

<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
  public $timestamps = false;
  protected $table = 'areas';
  protected $fillable = ['nombre_area', 'descripcion_area','activo_pasivo'];
}

<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    public $timestamps = false;
  protected $table = 'tipo_usuario';
   protected $fillable = ['nombre', 'descripcion'];
}

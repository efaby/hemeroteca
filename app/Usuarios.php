<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\TipoUsuario;

class Usuarios extends Model
{
    public $timestamps = false;
  protected $table = 'usuarios';
   protected $fillable = ['nombre', 'Apellido','username','password','email','direccion','cedula','tipo_usuario_idtipo_usuario','activo_pasivo'];

 public function ListaRelacionadaTipoUsuario()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\TipoUsuario','tipo_usuario_idtipo_usuario','id');
    }

}

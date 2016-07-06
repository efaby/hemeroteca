<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\ObraIsbn;
use Hemeroteca\Clientes;

class ReservacionesDonaciones extends Model
{
     public $timestamps = false;
  protected $table = 'prestaciones_donaciones';
   protected $fillable = ['fecha_reservacion', 'numeros_dias','cliente_idcliente','prestacion_donacion','obras_isbn_idobras_isbn'];

	public function RelacionDonacionesHistorialIsbn()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\ObraIsbn','obras_isbn_idobras_isbn','id');
    }
    
	public function ListaRelacionadaCliente()
    {
    	//(nombre de la clase a relacionar, nombre del campo hijo , nombre del campo padre)
    	return $this->belongsTo('Hemeroteca\Clientes','cliente_idcliente','id');
    }

   
}

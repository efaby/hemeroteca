<?php

namespace Hemeroteca;

use Illuminate\Database\Eloquent\Model;
use Hemeroteca\ObraIsbn;
use Hemeroteca\Clientes;

class ReservacionesDonaciones extends Model
{
     public $timestamps = false;
  protected $table = 'prestaciones_donaciones';
   protected $fillable = ['fecha_reservacion', 'numeros_dias','cliente_idcliente','prestacion_donacion','obras_isbn_idobras_isbn','activo','fecha_devolucion','fecha_registro_devolucion'];

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

    static public function scopeObtenerObras($query, $textoBuscar,$fechaInicio, $fechaFin){
    	 
    	//	$query = DB::table('obras');
    	$query->distinct();
    	
    	if($textoBuscar != ''){    		
    		$query->join('obras_isbn', 'obras_isbn.id', '=', 'obras_isbn_idobras_isbn');    		
    		$query->where('codigo_isbn', 'LIKE', "%$textoBuscar%");    		
    	}
    	
    	$query->where('activo',"=",1);
    	$query->where('prestacion_donacion',"=","pres");
    	
    	if($fechaInicio != ''){
    		$query->where('fecha_devolucion',">=",$fechaInicio);
    	}
    	if($fechaFin != ''){
    		$query->where('fecha_devolucion',"<=",$fechaFin);
    	}
    	 
    	return $query->get();
    
    }
   
}

<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;
use Hemeroteca\Clientes;
use Hemeroteca\ReservacionesDonaciones;
use Hemeroteca\Http\Requests;
use Hemeroteca\ObraIsbn;
use Hemeroteca\Obras;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
       

Public function index(Request $request)

{       $activo='activo';
		$cedula = $request->get('cedula');
        $Clientesobj = Clientes::busqueda($request->get('cedula'))->clienteactivo()->paginate(10);
       // $Clientesobj = Clientes::where('activo_pasivo',$activo)->paginate(7);
        return view('Reportes.listarPrestacionesClientes',compact('Clientesobj','cedula'));

}


  public function vistaPdfClientes($tipo) 
    {
       $prestacionobj=ReservacionesDonaciones::where('cliente_idcliente',$tipo)->get();
       $clienteobj=Clientes::find($tipo);
        $view = \View::make('Reportes.mostrarPrestacionClientes',compact('prestacionobj','clienteobj'))->render();
       //$view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view);
         return $pdf->stream('reporte');
    }

    public function descargaPdfClientes($tipo)
    {
        $prestacionobj=ReservacionesDonaciones::where('cliente_idcliente',$tipo)->get();
       $clienteobj=Clientes::find($tipo);
        $view = \View::make('Reportes.mostrarPrestacionClientes',compact('prestacionobj','clienteobj'))->render();
        $pdf = \App::make('dompdf.wrapper');     
        $pdf->loadHTML($view);
         return $pdf->download('reporte.pdf');
    }
    
    /*
     * Reportes obras
     */
    
    public function buscarObras(Request $request){
    	
    	$estado = (($request->get('estado')>0))?$request->get('estado'):0;
    	$estados = array(1,2);
    	if($estado!=0){
    		$estados = array($estado);
    	}
    	$obras = ObraIsbn::where('activo_pasivo','activo')->whereIn('estado_obras_id', $estados)->paginate(env('LIMIT_LIST'));
        $obras->appends(array('estado' => $estado))->links();    
    	return view ('Reportes.listarObras',compact('obras','estado'));    	
    }    
    
    public function exportarObras(Request $request){
    	$estado = (($request->get('estado')>0))?$request->get('estado'):0;
    	$tipo = $request->get('tipo');
    	$estados = array(1,2);
    	if($estado!=0){
    		$estados = array($estado);
    	}
    	$obras = ObraIsbn::where('activo_pasivo','activo')->whereIn('estado_obras_id', $estados)->get();
    	$fecha = date('Y-m-d');
    	$titulo = '';
    	if($estado == 1){
    		$titulo = 'Disponibles';
    	} else {
    		if($estado == 2){
    			$titulo = "Prestadas";
    		}
    	}
    	$view = \View::make('Reportes.exportarObras',compact('titulo','fecha','obras'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);    	
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    	
    }
    
    public function buscarPrestaciones(Request $request){
    	 
    	$fechaInicio = $request->get('fecha_inicio');
    	$fechaFin = $request->get('fecha_fin');
    	$listado =  ReservacionesDonaciones::ObtenerObrasReporte('pres',$fechaInicio,$fechaFin,true);
    	$listado->appends(array('fecha_inicio' => $fechaInicio,'fecha_fin' => $fechaFin))->links();
    	return view ('Reportes.listarPrestaciones',compact('listado','estado','fechaInicio', 'fechaFin'));
    }
    
    public function exportarPrestaciones(Request $request){
    	
    	$fechaInicio = $request->get('fecha_inicio');
    	$fechaFin = $request->get('fecha_fin');
    	$tipo = $request->get('tipo');
    	$fecha = date('Y-m-d');
    	$listado =  ReservacionesDonaciones::ObtenerObrasReporte('pres',$fechaInicio,$fechaFin,false);
    	$filtro = "Filtro: ";
    	$filtro .= ($fechaInicio != '')?"Desde: ".$fechaInicio:"Todas";
    	$filtro .= ($fechaFin != '')?" Hasta: ".$fechaFin:"";    	
    	
    	$view = \View::make('Reportes.exportarPrestaciones',compact('listado','filtro','fecha'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    	 
    }
    
    public function buscarDonaciones(Request $request){
    
    	$fechaInicio = $request->get('fecha_inicio');
    	$fechaFin = $request->get('fecha_fin');
    	$listado =  ReservacionesDonaciones::ObtenerObrasReporte('don',$fechaInicio,$fechaFin,true);
    	$listado->appends(array('fecha_inicio' => $fechaInicio,'fecha_fin' => $fechaFin))->links();
    	return view ('Reportes.listarDonaciones',compact('listado','estado','fechaInicio', 'fechaFin'));
    }
    
    public function exportarDonaciones(Request $request){
    	 
    	$fechaInicio = $request->get('fecha_inicio');
    	$fechaFin = $request->get('fecha_fin');
    	$tipo = $request->get('tipo');
    	$fecha = date('Y-m-d');
    	$listado =  ReservacionesDonaciones::ObtenerObrasReporte('don',$fechaInicio,$fechaFin,false);
    	$filtro = "Filtro: ";
    	$filtro .= ($fechaInicio != '')?"Desde: ".$fechaInicio:"Todas";
    	$filtro .= ($fechaFin != '')?" Hasta: ".$fechaFin:"";
    	 
    	$view = \View::make('Reportes.exportarDonaciones',compact('listado','filtro','fecha'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    
    }
    public function buscarClientes(Request $request){
    	$activo='activo';
    	$cedula = $request->get('cedula');
    	$Clientesobj = Clientes::busqueda($request->get('cedula'))->clienteactivo()->paginate(env('LIMIT_LIST'));
    	$Clientesobj->appends(array('cedula' => $cedula))->links();
    	return view('Reportes.listarPrestacionesClientes',compact('Clientesobj','cedula'));
    }
    public function exportarClientes(Request $request){

    	$activo='activo';
    	$cedula = $request->get('cedula');
    	$Clientesobj = Clientes::busqueda($cedula)->clienteactivo()->get();
    	$fecha = date('Y-m-d');
    	$tipo = $request->get('tipo');    
    	$view = \View::make('Reportes.exportarClientes',compact('Clientesobj','fecha'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    
    }
    
    public function detalleCliente($id,Request $request){
    	
    	$estado = $request->get('estado');
    	$estados = array('pres','don');
    	if($estado!=''){
    		$estados = array($estado);
    	}
    	$listado=ReservacionesDonaciones::where('cliente_idcliente',$id)->whereIn('prestacion_donacion', $estados)->paginate(env('LIMIT_LIST'));
    	$cliente=Clientes::find($id);
    	$listado->appends(array('estado' => $estado))->links();
    	return view('Reportes.detalleCliente',compact('cliente','listado','id','estado'));
    }
    
    public function exportarClienteDetalles($id,Request $request){
    
    	$estado = $request->get('estado');
    	$estados = array('pres','don');
    	if($estado!=''){
    		$estados = array($estado);
    	}
    	$listado=ReservacionesDonaciones::where('cliente_idcliente',$id)->whereIn('prestacion_donacion', $estados)->get();
    	$cliente=Clientes::find($id);
    	$fecha = date('Y-m-d');
    	$tipo = $request->get('tipo');
    	$view = \View::make('Reportes.exportarClienteDetalles',compact('cliente','listado','id','estado','fecha'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    
    }
    
    
    public function buscarTiposObras(Request $request){
    	 
    	$resultados = $this->obtenerTiposObras();	   	
    	return view ('Reportes.listarTiposObras',compact('resultados'));
    }
    
    public function exportarTiposObras(Request $request){
    	$resultados = $this->obtenerTiposObras();
    	$fecha = date('Y-m-d');
    	$tipo = $request->get('tipo');
    	$view = \View::make('Reportes.exportarTiposObras',compact('resultados','fecha'))->render();
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	return ($tipo==1)? $pdf->stream('reporte'):$pdf->download('reporte.pdf');
    	 
    }
    
    private function obtenerTiposObras(){
    	$obras = Obras::select(DB::raw('tipos_obras.id, count(obras.id) as total, obras_isbn.estado_obras_id, tipos_obras.nombre_tipos_obras'))
    	->join('tipos_obras', 'tipos_obras.id', '=', 'obras.tipos_obras_idtipos_obras')
    	->join('obras_isbn', 'obras.id', '=', 'obras_isbn.obras_id')
    	->groupBy('tipos_obras.id')
    	->groupBy('obras_isbn.estado_obras_id')
    	->get();
    	$resultados = array();
    	$row = array();
    	$id = 0;
    	foreach ($obras as $item){
    		if($id != $item->id){
    			if($id != 0){
    				$resultados[] = $row;
    			}
    			$total = 0;
    			$id = $item->id;
    			$row = array();
    			$row['nombre'] = $item->nombre_tipos_obras;
    			$row['total'] = 0;
    		}
    		$row[$item->estado_obras_id] = $item->total;
    		$row['total'] = $row['total'] + $item->total;
    	}
    	if(array_key_exists('nombre',$row)){
    		$resultados[] = $row;
    	}
    	
    	return $resultados;
    }
}

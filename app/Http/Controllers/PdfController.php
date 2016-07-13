<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;
use Hemeroteca\Clientes;
use Hemeroteca\ReservacionesDonaciones;
use Hemeroteca\Http\Requests;
use Hemeroteca\ObraIsbn;

class PdfController extends Controller
{
       

Public function index(Request $request)

{       $activo='activo';
        $Clientesobj = Clientes::busqueda($request->get('cedula'))->clienteactivo()->paginate(10);
       // $Clientesobj = Clientes::where('activo_pasivo',$activo)->paginate(7);
        return view('Reportes.listarPrestacionesClientes',compact('Clientesobj'));

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
    
    
}

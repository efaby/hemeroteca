<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;
use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
Use Hemeroteca\ReservacionesDonaciones;
use Hemeroteca\Clientes;
use Hemeroteca\ObraIsbn;
use Hemeroteca\Obras;
use Hemeroteca\TipoObras;


use Carbon\Carbon;

class ReservarDonarController extends Controller
{
	 

public function index()
{   
    $prestacion='prestada';
    $Prestacionesobj = ReservacionesDonaciones::where('prestacion_donacion', $prestacion)->paginate(7);
    return view('Reservaciones.listarPrestaciones',compact('Prestacionesobj'));
}

	public function create(Request $request){
		
		
	}


     public function store(Request $request){
     	
     	$v = \Validator::make($request->all(), [     	
     			'numeros_dias' => 'required',
     			'fecha_reservacion' => 'required',
     			'estado'    => 'required',
     			'isbn_id' => 'required',
     			'cliente_id' => 'required'     			
     	]);
     	
     	if ($v->fails())
     	{
     		return redirect()->back()->withInput()->withErrors($v->errors());
     	}
     	
     	$fechaDevoucion = date("Y-m-d", strtotime($request['fecha_reservacion'] ." + ". $request['numeros_dias']." days"));
     	
    	ReservacionesDonaciones::create(
            [
             'fecha_reservacion'=> $request['fecha_reservacion'],
             'numeros_dias'=> $request['numeros_dias'],
             'cliente_idcliente'=> $request['cliente_id'],
             'prestacion_donacion'=>($request['estado']==2)?'pres':'don',
             'obras_isbn_idobras_isbn'=>$request['isbn_id'],
             'activo'=>1,
             'fecha_devolucion' => $fechaDevoucion
             ]);

        $Isbnobj = ObraIsbn::find($request->get('isbn_id'));
        $Isbnobj->estado_obras_id=$request['estado'];
        $Isbnobj->save();
        return redirect()->route('reservaciones.buscarObra',($request['estado']==2)?'prestacion':'donacion')->with('mensaje', ($request['estado']==2)?'Prestación registrada éxitosamente.':'Donación registrada éxitosamente.');

        }

   public function show($id)
    {
        $prestacionobj=ReservacionesDonaciones::find($id);
        $view = \View::make('Reportes.mostrarPrestacionIndividual',compact('prestacionobj'))->render();
       //$view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view);
         return $pdf->stream('reporte');
    }

   public function edit($id)
    {
        $prestacionobj=ReservacionesDonaciones::find($id);
        $view = \View::make('Reservaciones.mostrarPdf',compact('prestacionobj'))->render();
        $pdf = \App::make('dompdf.wrapper');     
        $pdf->loadHTML($view);
         return $pdf->download('reporte.pdf');
    }

    public function update()
    {}

    public function vercliente()
    {
        return view('Reservaciones.crearCliente');

    }

    public function verVistaPrevia()
    {
        return view('Reservaciones.crearCliente');

    }
    
    public function buscarObra($opcion,Request $request){
    	$template = "templateAdministacion";
    	$listadoObras = array();
    	if($opcion=='prestacion'){
    		$titulo = "Prestación";
    	} else {
    		if($opcion=='buscar'){
    			$titulo = "Buscador";
    			$template = "templatePublico";
    		} else {
    			$titulo = "Donación";
    		}
    	}

    	$textoBuscar = ($request->session()->has($opcion.'textoBuscar'))?$request->session()->get($opcion.'textoBuscar'):null;
    	$filtros =  ($request->session()->has($opcion.'filtros'))?$request->session()->get($opcion.'filtros'):array('titulo');
    	$resultado = false;
    	if ($request->isMethod('POST'))
    	{
    		$textoBuscar = $request->get('texto_buscar');
    		$filtros = is_array($request->get('filtro'))?$request->get('filtro'):array('titulo');    		
    		$request->session()->put($opcion.'textoBuscar', $textoBuscar);
    		$request->session()->put($opcion.'filtros', $filtros);
    	} 
    	if($textoBuscar!=''){
    		$listadoObras =  Obras::ObtenerObras($textoBuscar,$filtros);
    		$resultado = true;
    	}
    	
    	$mensaje = $request->session()->get('mensaje');
    	return view ('Reservaciones.buscarObras',compact('listadoObras','textoBuscar','filtros','resultado','mensaje','opcion','titulo','template'));
    }

    public function prestacion($isbn){
    	$obra = ObraIsbn::find($isbn);
    	$fechaActual = Carbon::now();
    	$fechaActual=$fechaActual->toDateString();
    	$estado = 2;
    	$titulo = "Prestar";
    	$opcion = "prestacion";
    	return view('Reservaciones.crearReservacion',compact('obra','fechaActual','estado','titulo','opcion'));    	
    }
    
    public function donacion($isbn){
    	$obra = ObraIsbn::find($isbn);
    	$fechaActual = Carbon::now();
    	$fechaActual=$fechaActual->toDateString();
    	$estado = 3;
    	$titulo = "Donar";
    	$opcion = "donacion";
    	return view('Reservaciones.crearReservacion',compact('obra','fechaActual','estado','titulo','opcion'));
    }
    
    public function mostrarObra($id){
    	$Obrasobj=Obras::find($id);    	
    	return view ('Reservaciones.mostrarObra',compact('Obrasobj'));
    }
    
    public function devolucionObra(Request $request){
    	
    	$textoBuscar =null;
    	$listadoObras = array();
    	$resultado = false;
    	$fechaInicio = Carbon::now();
    	$fechaInicio= $fechaFin = $fechaInicio->toDateString();
    	if ($request->isMethod('POST'))
    	{
    		$textoBuscar = $request->get('texto_buscar');
    		$fechaInicio = $request->get('fecha_inicio');
    		$fechaFin = $request->get('fecha_fin');  		
    		$listadoObras =  ReservacionesDonaciones::ObtenerObras($textoBuscar,$fechaInicio,$fechaFin);	    		
    		$resultado = true;
    	}     	 
    	$mensaje = $request->session()->get('mensaje');
    	return view ('Reservaciones.devolucionObras',compact('listadoObras','textoBuscar','resultado','mensaje','fechaInicio', 'fechaFin'));
    	}
    	
    	public function devolverObra(Request $request){
    		
    		$prestacion = ReservacionesDonaciones::find($request->get('id'));
    		$prestacion->activo = 0;
    		$prestacion->fecha_registro_devolucion = date('Y-m-d');
    		$prestacion->save();  
    		
    		$Isbnobj = ObraIsbn::find($prestacion->obras_isbn_idobras_isbn);
    		$Isbnobj->estado_obras_id=1;
    		$Isbnobj->save();

    		return redirect()->route('reservaciones.devolucionObra')->with('mensaje', 'Devolución registrada éxitosamente.');
    		
    	
    	}
}

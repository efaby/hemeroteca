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
     	
    	ReservacionesDonaciones::create(
            [
             'fecha_reservacion'=> $request['fecha_reservacion'],
             'numeros_dias'=> $request['numeros_dias'],
             'cliente_idcliente'=> $request['cliente_id'],
             'prestacion_donacion'=>($request['estado']==2)?'pres':'don',
             'obras_isbn_idobras_isbn'=>$request['isbn_id'],
             ]);

        $Isbnobj = ObraIsbn::find($request->get('isbn_id'));
        $Isbnobj->estado_obras_id=$request['estado'];
        $Isbnobj->save();
        return redirect()->route('reservaciones.buscarObra')->with('mensaje', 'Reservacion registrada');

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
    
    public function buscarObra(Request $request){

    	$listadoObras = array();
    	$textoBuscar = ($request->session()->has('textoBuscar'))?$request->session()->get('textoBuscar'):null;
    	$filtros =  ($request->session()->has('filtros'))?$request->session()->get('filtros'):array('titulo');
    	$resultado = false;
    	if ($request->isMethod('POST'))
    	{
    		$textoBuscar = $request->get('texto_buscar');
    		$filtros = is_array($request->get('filtro'))?$request->get('filtro'):array('titulo');    		
    		$request->session()->put('textoBuscar', $textoBuscar);
    		$request->session()->put('filtros', $filtros);
    	} 
    	$listadoObras =  Obras::ObtenerObras($textoBuscar,$filtros);
    	$resultado = true;
    	$mensaje = $request->session()->get('mensaje');
    	return view ('Reservaciones.buscarObras',compact('listadoObras','textoBuscar','filtros','resultado','mensaje'));
    }

    public function reservar($isbn){
    	$obra = ObraIsbn::find($isbn);
    	$fechaActual = Carbon::now();
    	$fechaActual=$fechaActual->toDateString();
    	return view('Reservaciones.crearReservacion',compact('obra','fechaActual'));
    	
    }
}

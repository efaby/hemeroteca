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

	public function create(Request $request)
	{
        $libre=1;
		$fechaActual = Carbon::now();
        $fechaActual=$fechaActual->toDateString();
        $TiposObrasobj = TipoObras::where('activo_pasivo', 'activo')->get();
        $Clientesobj = Clientes::busquedacliente($request->get('cedula_cliente'))->clienteactivo()->get();    
        $Isbnobj = ObraIsbn::busquedaisbn($request->get('codigo'))->isbnactivo()->isbnlibre($libre)->get();
        $Clientesobjcount = Clientes::busquedacliente($request->get('cedula_cliente'))->clienteactivo()->count();
        $Isbnobjcount = ObraIsbn::busquedaisbn($request->get('codigo'))->isbnactivo()->isbnlibre($libre)->count();
        $numeros_dias=$request->get('numeros_dias');
        if(($Clientesobjcount>=1)&&($Isbnobjcount>=1)&&($numeros_dias <>0))
        {
            return view ('Reservaciones.verVistaPrevia',compact('Clientesobj','fechaActual','TiposObrasobj','Isbnobj','numeros_dias'));
        }
        else
        {
            return view ('Reservaciones.prestacionesObras',compact('Clientesobj','fechaActual','TiposObrasobj','Isbnobj'));
        }
        
	


    }


     public function store(Request $request)
        {
        $prestacion='prestada';
        $estadoprestacion= 2;
    	ReservacionesDonaciones::create(
            [
             'fecha_reservacion'=> $request['fecha_reservacion'],
             'numeros_dias'=> $request['numeros_dias'],
             'cliente_idcliente'=> $request['id_cliente'],
             'prestacion_donacion'=>$prestacion,
             'obras_isbn_idobras_isbn'=>$request['id_isbn'],
             ]);

        $Isbnobj = ObraIsbn::find($request->get('id_isbn'));
        $Isbnobj->estado_obras_id=$estadoprestacion;
        $Isbnobj->save();
       

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

}

<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;
use Hemeroteca\Clientes;
use Hemeroteca\ReservacionesDonaciones;
use Hemeroteca\Http\Requests;

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
}

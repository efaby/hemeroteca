<?php

namespace Hemeroteca\Http\Controllers;

use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Clientes;
Use Hemeroteca\ReservacionesDonaciones;


class administracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$clientes = Clientes::where('activo_pasivo','activo')->count();
    	$prestaciones = ReservacionesDonaciones::where('prestacion_donacion','pres')->where('activo',1)->count();
    	$donaciones = ReservacionesDonaciones::where('prestacion_donacion','don')->count();
    	$devoluciones = ReservacionesDonaciones::where('fecha_devolucion',date('Y-m-d'))->where('activo',1)->count();
        return view('pg_Administracion',compact('clientes','prestaciones','donaciones','devoluciones'));
    }

}

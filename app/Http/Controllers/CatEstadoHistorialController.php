<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\EstadoHistorialCrearRequest;
use Hemeroteca\Http\Requests\EstadoHistorialEditarRequest;
use Hemeroteca\EstadoObra;
use Session;
use Redirect;

class CatEstadoHistorialController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usuario nombre del modelo
         $EstadoHistorialobj=EstadoObra::paginate(5);
        return view('Catalogos.EstadoHistorial.listar',compact('EstadoHistorialobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Catalogos.EstadoHistorial.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoHistorialCrearRequest $request)
    {
        EstadoObra::create(
            [
            //el primer nombre corresponde a a los campos del modelo de tipoUsuarios
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre_estado_historial'=> $request['nombre_estado_historial'],
             'descripcion_estado_historial'=> $request['descripcion_estado_historial'],
             'activo_pasivo'=> $request['activo_pasivo'],
             ]);
       return Redirect::to('/estado');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $EstadoHistorialobj=EstadoObra::find($id);
        return view('Catalogos.EstadoHistorial.mostrar',compact('EstadoHistorialobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $EstadoHistorialobj=EstadoObra::find($id);
        return view('Catalogos.EstadoHistorial.editar',compact('EstadoHistorialobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoHistorialEditarRequest $request, $id)
    {
        $EstadoHistorialobj = EstadoObra::find($id);
        $EstadoHistorialobj->fill($request->all());
        $EstadoHistorialobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('estado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          EstadoObra::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/estado');
    }
}

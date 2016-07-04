<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\tipoObrasCrearRequest;
use Hemeroteca\Http\Requests\tipoObrasEditarRequest;
use Hemeroteca\TipoObras;
use Session;
use Redirect;

class CatTipoObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usuario nombre del modelo
         $tipoObrasobj=TipoObras::paginate(5);
        return view('Catalogos.TipoObras.listar',compact('tipoObrasobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Catalogos.TipoObras.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipoObrasCrearRequest $request)
    {
        TipoObras::create(
            [
            //el primer nombre corresponde a a los campos del modelo de tipoUsuarios
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre_tipos_obras'=> $request['nombre_tipos_obras'],
             'descripcion_tipos_obras'=> $request['descripcion_tipos_obras'],
             'activo_pasivo'=>$request['activo_pasivo'],
             ]);
       return Redirect::to('/tipoObra');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tipoObrasobj=TipoObras::find($id);
        return view('Catalogos.TipoObras.mostrar',compact('tipoObrasobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tipoObrasobj=TipoObras::find($id);
        return view('Catalogos.TipoObras.editar',compact('tipoObrasobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(tipoObrasEditarRequest $request, $id)
    {
        $tipoObrasobj = TipoObras::find($id);
        $tipoObrasobj->fill($request->all());
        $tipoObrasobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('tipoObra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          TipoObras::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/tipoObra');
    }
}

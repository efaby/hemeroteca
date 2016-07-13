<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\tipoRegistroCrearRequest;
use Hemeroteca\Http\Requests\tipoRegistroEditarRequest;
use Hemeroteca\TipoRegistro;
use Session;
use Redirect;

class CatTipoRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usuario nombre del modelo
         $TipoRegistroobj=TipoRegistro::paginate(env('LIMIT_LIST'));
        return view('Catalogos.TipoRegistro.listar',compact('TipoRegistroobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Catalogos.TipoRegistro.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipoRegistroCrearRequest $request)
    {
        TipoRegistro::create(
            [
            //el primer nombre corresponde a a los campos del modelo de TipoRegistros
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre_registro'=> $request['nombre_registro'],
             'descripcion_registro'=> $request['descripcion_registro'],
             'activo_pasivo'=>$request['activo_pasivo'],
             ]);
       return Redirect::to('/tipoRegistro');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $TipoRegistroobj=TipoRegistro::find($id);
        return view('Catalogos.TipoRegistro.mostrar',compact('TipoRegistroobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $TipoRegistroobj=TipoRegistro::find($id);
        return view('Catalogos.TipoRegistro.editar',compact('TipoRegistroobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(tipoRegistroEditarRequest $request, $id)
    {
        $TipoRegistroobj = TipoRegistro::find($id);
        $TipoRegistroobj->fill($request->all());
        $TipoRegistroobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('tipoRegistro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          TipoRegistro::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/tipoRegistro');
    }
}

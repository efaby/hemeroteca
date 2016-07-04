<?php

namespace Hemeroteca\Http\Controllers;
use Illuminate\Http\Request;
use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\tipoUsuarioCrearRequest;
use Hemeroteca\Http\Requests\tipoUsuarioEditarRequest;
use Hemeroteca\TipoUsuario;
use Session;
use Redirect;

class CatTipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Usuario nombre del modelo
         $tipoUsuarioobj=TipoUsuario::paginate(7);
        return view('Catalogos.TipoUsuarios.listar',compact('tipoUsuarioobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Catalogos.TipoUsuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipoUsuarioCrearRequest $request)
    {
        TipoUsuario::create(
            [
            //el primer nombre corresponde a a los campos del modelo de tipoUsuarios
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre'=> $request['nombre'],
             'descripcion'=> $request['descripcion'],
             ]);
       return Redirect::to('/tipoUsuario');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tiposUsuariosobj=TipoUsuario::find($id);
        return view('Catalogos.TipoUsuarios.mostrar',compact('tiposUsuariosobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tiposUsuariosobj=TipoUsuario::find($id);
        return view('Catalogos.TipoUsuarios.editar',compact('tiposUsuariosobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(tipoUsuarioEditarRequest $request, $id)
    {
        $tiposUsuariosobj = TipoUsuario::find($id);
        $tiposUsuariosobj->fill($request->all());
        $tiposUsuariosobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('tipoUsuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoUsuario::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/tipoUsuario');
    }
}

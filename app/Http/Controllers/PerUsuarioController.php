<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\usuarioCrearRequest;
use Hemeroteca\Http\Requests\usuarioEditarRequest;
use Hemeroteca\Usuarios;
use Hemeroteca\TipoUsuario;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash;

class PerUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Usuario nombre del modelo
         $Usuariosobj=Usuarios::paginate(env('LIMIT_LIST'));
        return view('Personas.Usuarios.listar',compact('Usuariosobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	 $tipos = TipoUsuario::all();
          return view ('Personas.Usuarios.crear',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuarioCrearRequest $request)
    {
        Usuarios::create(
            [
            //el primer nombre corresponde a a los campos del modelo de Usuarioss
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre'=> $request['nombre'],
             'Apellido'=> $request['Apellido'],
             'username' => $request['username'],
             'password' => $request['password'],
             'email'  => $request['email'],
             'direccion' => $request['direccion'],
             'cedula' => $request['cedula'],
             'tipo_usuario_idtipo_usuario' => $request['tipo_usuario_idtipo_usuario'],
             'activo_pasivo'=>$request['activo_pasivo'],
             ]);
       return Redirect::to('/usuario');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Usuariosobj=Usuarios::find($id);
        return view('Personas.Usuarios.mostrar',compact('Usuariosobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tipos = TipoUsuario::all();
         $Usuariosobj=Usuarios::find($id);
        return view('Personas.Usuarios.editar',compact('Usuariosobj','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(usuarioEditarRequest $request, $id)
    {
        $Usuariosobj = Usuarios::find($id);
        $Usuariosobj->nombre = $request->get('nombre');
        $Usuariosobj->Apellido = $request->get('Apellido');
        $Usuariosobj->username = $request->get('username');
        $Usuariosobj->password = Hash::make($request->get('password'));
        $Usuariosobj->email = $request->get('email');
        $Usuariosobj->direccion = $request->get('direccion');
        $Usuariosobj->cedula = $request->get('cedula');
        $Usuariosobj->tipo_usuario_idtipo_usuario = $request->get('tipo_usuario_idtipo_usuario');
        $Usuariosobj->activo_pasivo = $request->get('activo_pasivo');
      //  $Usuariosobj->fill($request->all());
        $Usuariosobj->save();
        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return Redirect::to('/usuario');
    }
}

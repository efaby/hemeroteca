<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\clienteCrearRequest;
use Hemeroteca\Http\Requests\clienteEditarRequest;
use Hemeroteca\Clientes;
use Session;
use Redirect;

class PerClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //Usuario nombre del modelo
         $Clientesobj = Clientes::busqueda($request->get('cedula'))->paginate(8);
        return view('Personas.Clientes.listar',compact('Clientesobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
          return view ('Personas.Clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clienteCrearRequest $request)
    {
        Clientes::create(
            [
            //el primer nombre corresponde a a los campos del modelo de Clientess
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
            'nombre_cliente'=> $request['nombre_cliente'],
             'apellido_cliente'=> $request['apellido_cliente'],
             'cedula_cliente' => $request['cedula_cliente'],
             'email_cliente' => $request['email_cliente'],
             'direccion_cliente'  => $request['direccion_cliente'],
             'telefono_cliente' => $request['telefono_cliente'],
             'celular_cliente' => $request['celular_cliente'],
             'genero' => $request['genero'],
             'activo_pasivo'=>$request['activo_pasivo'],
             ]);
       return Redirect::to('/cliente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Clientesobj=Clientes::find($id);
        return view('Personas.Clientes.mostrar',compact('Clientesobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $Clientesobj=Clientes::find($id);
        return view('Personas.Clientes.editar',compact('Clientesobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(clienteEditarRequest $request, $id)
    {
        $Clientesobj = Clientes::find($id);
        $Clientesobj->fill($request->all());
        $Clientesobj->save();
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return Redirect::to('/cliente');
    }

    public function buscar()
    {

    }
}

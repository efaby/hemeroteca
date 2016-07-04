<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\proveedorCrearRequest;
use Hemeroteca\Http\Requests\proveedorEditarRequest;
use Hemeroteca\Proveedores;
use Session;
use Redirect;

class PerProveedorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usuario nombre del modelo
         $Proveedoresobj=Proveedores::paginate(5);
        return view('Personas.Proveedores.listar',compact('Proveedoresobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Personas.Proveedores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(proveedorCrearRequest $request)
    {
        Proveedores::create(
            [
            //el primer nombre corresponde a a los campos del modelo de Proveedoress
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre_proveedor'=> $request['nombre_proveedor'],
             'cedula_proveedor'=> $request['cedula_proveedor'],
             'direccion_proveedor'=> $request['direccion_proveedor'],
             'telefono_proveedor'=> $request['telefono_proveedor'],
             'celular_proveedor'=> $request['celular_proveedor'],
             'activo_pasivo'=>$request['activo_pasivo'],
             ]);
       return Redirect::to('/proveedor');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Proveedoresobj=Proveedores::find($id);
        return view('Personas.Proveedores.mostrar',compact('Proveedoresobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Proveedoresobj=Proveedores::find($id);
        return view('Personas.Proveedores.editar',compact('Proveedoresobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(proveedorEditarRequest $request, $id)
    {
        $Proveedoresobj = Proveedores::find($id);
        $Proveedoresobj->fill($request->all());
        $Proveedoresobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Proveedores::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/proveedor');
    }
}

<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\areaCrearRequest;
use Hemeroteca\Http\Requests\areaEditarRequest;
use Hemeroteca\Areas;
use Session;
use Redirect;


class CatAreasController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Usuario nombre del modelo
         $areasobj=Areas::paginate(5);
        return view('Catalogos.Area.listar',compact('areasobj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('Catalogos.Area.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(areaCrearRequest $request)
    {
        Areas::create(
            [
            //el primer nombre corresponde a a los campos del modelo de tipoUsuarios
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
             'nombre_area'=> $request['nombre_area'],
             'descripcion_area'=> $request['descripcion_area'],
             'activo_pasivo'=> $request['activo_pasivo'],
             ]);
       return Redirect::to('/area');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $areasobj=Areas::find($id);
        return view('Catalogos.Area.mostrar',compact('areasobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $areasobj=Areas::find($id);
        return view('Catalogos.Area.editar',compact('areasobj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(areaEditarRequest $request, $id)
    {
        $areasobj = Areas::find($id);
        $areasobj->fill($request->all());
        $areasobj->save();
        Session::flash('message',' Actualizado Correctamente');
        return redirect('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Areas::destroy($id);
        Session::flash('message','Tipo de Usuario Eliminado Correctamente');
        return Redirect::to('/area');
    }
}

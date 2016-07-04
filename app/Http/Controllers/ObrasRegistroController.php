<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contract\View\Factory;
use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\obrasCrearRequest;
use Hemeroteca\Http\Requests\obrasEditarRequest;
use Hemeroteca\Proveedores;
use Hemeroteca\Areas;
use Hemeroteca\TipoObras;
use Hemeroteca\TipoRegistro;
use Hemeroteca\Obras;
use Hemeroteca\EstadoObra;
use Hemeroteca\ObraIsbn;
use Carbon\Carbon;

class ObrasRegistroController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // OJO Esto permite el ingreso de obras 
         $AreaobjActivo = Areas::where('activo_pasivo', 'activo')->get();
         $ProveedoresobjActivo = Proveedores::where('activo_pasivo', 'activo')->get();
         $TipoObrasobjActivo = TipoObras::where('activo_pasivo', 'activo')->get();
         $TipoRegistroobjActivo = TipoRegistro::where('activo_pasivo', 'activo')->get();
         $fechaActual = Carbon::now();
         $fechaActual=$fechaActual->toDateString(); 
        $Isbnobj=Obras::where('titulo','nada' )->get();
       //$Isbnobjcount=ObraIsbn::orderBy('codigo_isbn', 'desc')->groupBy->('obras_id')->get();
        return view ('Obras.RegistroObras',compact('fechaActual','Isbnobj','AreaobjActivo','ProveedoresobjActivo','TipoObrasobjActivo','TipoRegistroobjActivo'));

        
    }

      public function show($id)
    {
        //$Isbnobj = ObraIsbn::where('estado_obras_id',$estadoprestado )->where('codigo_isbn',$isbn)->get(); 
          $Obrasobj=Obras::find($id);
         $ObrasIsbnObj=ObraIsbn::where('obras_id',$id)->get();
          return view ('Obras.MostrarInformacionObra',compact('Obrasobj','ObrasIsbnObj'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ObrasObj = Obras::busqueda($request->get('titulo'))->paginate(8); 

        return view('Obras.ListarObras',compact('ObrasObj'));
          //Usuario nombre del modelo
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(obrasCrearRequest $request)
    {
            
            $ultimoRegistro=Obras::create(
            [

            //el primer nombre corresponde a a los campos del modelo de Clientess
            //el segundo nombre corresponde al parametro del formulario de ingreso osea al nombre que viene del label del nombre
            
            'autor'=> $request['autor'],
             'editorial'=> $request['editorial'],
             'titulo' => $request['titulo'],
             'fecha_publicacion' => $request['fecha_publicacion'],
             'fecha_registro'  => $request['fecha_registro'],
             'numeros_paginas' => $request['numeros_paginas'],
             'proveedor_idproveedor' => $request['proveedor_idproveedor'],
             'tipos_obras_idtipos_obras' => $request['tipos_obras_idtipos_obras'],
             'areas_idareas' => $request['areas_idareas'],
             'tipo_registro_id' => $request['tipo_registro_id'],      
             'descripcion_obra' => $request['descripcion_obra'],
             ]);
            $idUltimo=$ultimoRegistro->id;
            return redirect()->route('obrasRegistros.edit',[$idUltimo]);        
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    

    public function edit($id)
    {
        $AreaobjActivo = Areas::where('activo_pasivo', 'activo')->get();
         $ProveedoresobjActivo = Proveedores::where('activo_pasivo', 'activo')->get();
         $TipoObrasobjActivo = TipoObras::where('activo_pasivo', 'activo')->get();
         $TipoRegistroobjActivo = TipoRegistro::where('activo_pasivo', 'activo')->get();
         $fechaActual = Carbon::now();
         $fechaActual=$fechaActual->toDateString(); 
         $Obrasobj=Obras::find($id);
        //$Isbnobjcount= ObraIsbn::where('obras_id',$id )->count();
         $Isbnobj= ObraIsbn::where('obras_id',$id )->get();  
            return view('Obras.ModificarRegistroObra',compact('AreaobjActivo','ProveedoresobjActivo','TipoObrasobjActivo','TipoRegistroobjActivo','fechaActual','Isbnobj','Isbnobjcount','Obrasobj'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(obrasEditarRequest $request, $id)
    {
        $Obrasobj = Obras::find($id);
        $Obrasobj->fill($request->all());
        $Obrasobj->save();
         return redirect()->route('obrasRegistros.edit',[$id]);
    }


     public function destroy($id)
    {
          
    }

    public function verarea()
    {
        return view('Obras.crearArea');

    }

      public function verregistro()
    {
        return view('Obras.crearTipoRegistro');

    }
     public function verobra()
    {
        return view('Obras.crearTipoObra');

    }
       public function verproveedor()
    {
        return view('Obras.crearProveedor');

    }

}

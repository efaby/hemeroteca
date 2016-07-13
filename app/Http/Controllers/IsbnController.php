<?php

namespace Hemeroteca\Http\Controllers;

use Illuminate\Http\Request;

use Hemeroteca\Http\Requests;
use Hemeroteca\Http\Controllers\Controller;
use Hemeroteca\Http\Requests\isbnCrearRequest;
use Hemeroteca\ObraIsbn;
use Hemeroteca\Obras;

class IsbnController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
          return view('Obras.RegistroIsbn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(isbnCrearRequest $request)
    {   
        $estadolibre=1;
        $estadoactivo=$request['activo_pasivo'];
        $Obrasobj= Obras::all();
        $query = Obras::orderBy('id', 'desc')->first();
        $id_ultimo_registro = $query->id;
       // $id =$request['obras_id'];
        ObraIsbn::create(
                [
                'obras_id'=>$id_ultimo_registro,
                'estado_obras_id' =>$estadolibre,
                'codigo_isbn' =>$request['codigo_isbn'],
                'activo_pasivo'=>$estadoactivo,
                ]);
        return redirect()->route('obrasRegistros.edit',[$id_ultimo_registro]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        // $Isbnobj = ObraIsbn::find($id);
         $Isbnobj=ObraIsbn::where('obras_id',$id)->paginate(env('LIMIT_LIST'));
         $Obrasobj=Obras::find($id); 
          return view('Obras.EliminaObrasIsbn',compact('Isbnobj','Obrasobj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
     $Isbnobj=ObraIsbn::find($id);
     return view('Obras.ModificarIsbnObras',compact('Isbnobj'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Isbnobj = ObraIsbn::find($id);
        $Isbnobj->fill($request->all());
        $Isbnobj->save();
       $idUltimo=$Isbnobj->obras_id;
        return redirect()->route('isbn.show',[$idUltimo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
       $Obrasobj=ObraIsbn::find($id);
       $idUltimo=$Obrasobj->obras_id;
       $band=$request['bandera'];
        ObraIsbn::destroy($id);
        
        if($band ==1)
        {
            return redirect()->route('isbn.show',[$idUltimo]);
            
        }
        else
        {
             return redirect()->route('obrasRegistros.edit',[$idUltimo]); 
        }
        
     
    }
}

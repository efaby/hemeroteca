
 @extends ('layout.templateAdministacion')
 @section('content')



<table class="table">
  <thead>
     <tr class="bg-info" style="background-color:#d3d3d3">
      	<th colspan="3">Datos Importantes de la Obras  </th>
     </tr>
     </thead>
  <tbody>
     	 <tr>
       <td style="text-align:center;" class="col-md-3"> 
               <img src="{{asset("imagenes/libro3.jpg")}}" alt=""  width="160" height="160"/>
         </td>
        <td > 
        <div class="form-group">
        	<div class="row">
        	        
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('titulo','Titulo Obra:')!!}
  					   </div>
  					    <div class="row">
  					    	<div class="col-md-11">
  					   	   <div id="id_tipo-group" >
                      <text > {{$Obrasobj->titulo}}</text>
                   </div>
  					   </div>
  					   </div>
  					 </div >
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('autor','Autor:')!!}
  					   </div>
  					    <div class="row">
                     <div class="col-md-11">
                     <div id="id_tipo-group" >
                      <text > {{$Obrasobj->autor}}</text>
                   </div>
                  </div>   	
  					   </div>
  					 </div >
			       <div class="col-md-4">
               <div class="row">
                {!!Form::label('editorial','Editorial:')!!}
               </div>
                <div class="row">
                    <div class="col-md-11">
                     <div id="editorial-group" >
                      <text > {{$Obrasobj->editorial}}</text>
                   </div>
                  </div>
               </div>
             </div >  
			</div>
			</div> 	


	 <div class="form-group">
        	<div class="row">
        	        
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('fecha_registro','Fecha Registro:')!!}
  					   </div>
  					    <div class="row">
  					    	<div class="col-md-11">
  					   	    <div id="fecha_registro-group" >
                      <text > {{$Obrasobj->fecha_registro}}</text>
                   </div>
  					   </div>
  					   </div>
  					 </div >

             <div class="col-md-4">
               <div class="row">
                {!!Form::label('fecha_publicacion','Fecha Pucblicacion:')!!}
               </div>
                <div class="row">
                <div class="col-md-11">
                    <div id="fecha_publicacion-group" >
                      <text > {{$Obrasobj->fecha_publicacion}}</text>
                   </div>
               </div>
             </div >
             </div>
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('numeros_paginas','Numero Pagina:')!!}
  					   </div>
  					    <div class="row">
                <div class="col-md-11">
	                 <div id="numeros_paginas-group" >
                      <text > {{$Obrasobj->numeros_paginas}}</text>
                   </div>
                   </div>
  					   </div>
  					 </div >
			        
			</div>
			</div>
         <div class="form-group">
          <div class="row">
                  
              <div class="col-md-4">
               <div class="row">
                {!!Form::label('areas_idareas','Departamentos o Areas:')!!}
               </div>
                <div class="row">
                  <div class="col-md-11">
                   <div id="id_tipo-group" >
                     <text > {{$Obrasobj->ListaRelacionadaArea->nombre_area}}</text>
                   </div>
               </div>
               </div>
             </div >

            <div class="col-md-4">
               <div class="row">
               {!!Form::label('id_tipo','Tipo de Obra:')!!}
               </div>
                <div class="row">
                     <div class="col-md-11">
                     <div id="id_tipo-group" >
                        <text > {{$Obrasobj->ListaRelacionadaTipoObras->nombre_tipos_obras}}</text>
                   </div>
                  </div>    
               </div>
             </div >
            <div class="col-md-4">
               <div class="row">
               {!!Form::label('proveedor_idproveedor','Proveedor:')!!}
               </div>
                <div class="row">
                <div class="col-md-11">
                   <div id="numeros_paginas-group" >
                     <text > {{$Obrasobj->ListaRelacionadaProveedor->nombre_proveedor}}</text>
                   </div>
                   </div>
               </div>
             </div >
              
      </div>
      </div> 

      <div class="form-group">
           <div class="row">
                {!!Form::label('descripcion_obra','Breve Descripcion:')!!}
           </div>
            <div class="row">
                    <div class="col-md-11">
                    <div id="descripcion_obra-group" >
                      <text > {{$Obrasobj->descripcion_obra}}</text>
                   </div>
               </div>
              </div>
      </div>

         </td>
       </tr>
     </tbody>
     </table>
<table class="table">
  <thead>
     <tr class="bg-info" style="background-color:#d3d3d3">
        <th colspan="3">Isbn Almacenados de la Obra </th>

     </tr>
     </thead>
     <tbody>
       <tr >
         <td style="text-align:center;" class="col-md-6"> 
               <img src="{{asset("imagenes/libros2.jpg")}}" alt=""  width="200" height="200"/>
         </td>
        <td>
               <div class="col-md-4"> 
                 
               <table class="table table-striped" >
               <thead  >
            <tr class="bg-info" >
              <th >Isbn</th>
              <th >Situación</th>
              <th >Estado</th>
              
            </tr>

          </thead>
                <tbody>
                      @foreach ($ObrasIsbnObj as $obj)
                      <tr>
                       <td tyle="text-align: center">{{ $obj->codigo_isbn }}</td> 
                       <td>{{ $obj->ListaRelacionadaEstadoObra->nombre_estado_historial }}</td>
                        <td tyle="text-align: center">{{ $obj->activo_pasivo }}</td> 
                     </tr>
                     @endforeach
               </tbody>
             </table>
               </div> 


        </td>
       </tr>
     </tbody>
     </table>
    <div class="modal-footer">
    <table class="table ">
        <tbody>
                <tr>
                    <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>

                    <td >
                     
                         <a href="{{route('obrasRegistros.create')}}" class="btn btn-primary" ><i class="fa fa-times"></i> Cerrar</a

                    </td>
                </tr>
            </tbody>
        </table>
       </div>


@stop
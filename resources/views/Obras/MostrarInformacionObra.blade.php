
 @extends ('layout.templateAdministacion')
 @section('content')
<table class="table">
  <thead>
     <tr>
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
  					   	{!!Form::label('titulo','Titulo Obra:')!!}  					   
  					   	   <div id="id_tipo-group" >
		                      {{$Obrasobj->titulo}}
		                   </div>
  					   </div>  					   
  					<div class="col-md-4">  					   
  					   	{!!Form::label('autor','Autor:')!!}  					   
                     <div id="id_tipo-group" >
                      {{$Obrasobj->autor}}
                   </div>
                  </div>  					
			       <div class="col-md-4">              
                {!!Form::label('editorial','Editorial:')!!}             
                     <div id="editorial-group" >
                      {{$Obrasobj->editorial}}
                   </div>
             </div >  
			</div>
			</div> 	

	 <div class="form-group">
        	<div class="row">        	        
  					<div class="col-md-4">
  					   	{!!Form::label('fecha_registro','Fecha Registro:')!!}
  					   	    <div id="fecha_registro-group" >
                      {{$Obrasobj->fecha_registro}}
                   </div>
  					   </div>
             <div class="col-md-4">
                {!!Form::label('fecha_publicacion','Fecha Pucblicacion:')!!}
                    <div id="fecha_publicacion-group" >
                     {{$Obrasobj->fecha_publicacion}}
                   </div>
               </div>
  					<div class="col-md-4">
  					   	{!!Form::label('numeros_paginas','Numero Pagina:')!!}
	                 <div id="numeros_paginas-group" >
                    {{$Obrasobj->numeros_paginas}}
                   </div>
                   </div>
			</div>
			</div>
         <div class="form-group">
          <div class="row">                  
              <div class="col-md-4">
                {!!Form::label('areas_idareas','Departamentos o Areas:')!!}
                   <div id="id_tipo-group" >
                     {{$Obrasobj->ListaRelacionadaArea->nombre_area}}
                   </div>
               </div>
            <div class="col-md-4">
               {!!Form::label('id_tipo','Tipo de Obra:')!!}
                     <div id="id_tipo-group" >
                      {{$Obrasobj->ListaRelacionadaTipoObras->nombre_tipos_obras}}
                   </div>
                  </div>    
            <div class="col-md-4">
               {!!Form::label('proveedor_idproveedor','Proveedor:')!!}
                   <div id="numeros_paginas-group" >
					 {{$Obrasobj->ListaRelacionadaProveedor->nombre_proveedor}}
                   </div>
                   </div>             
      </div>
      </div> 

      <div class="form-group">
                {!!Form::label('descripcion_obra','Breve Descripcion:')!!}
                    <div id="descripcion_obra-group" >
                      {{$Obrasobj->descripcion_obra}}
                   </div>
               </div>
         </td>
       </tr>
     </tbody>
     </table>
<table class="table">
  <thead>
     <tr>
        <th colspan="3">ISBN Almacenados de la Obra </th>
     </tr>
     </thead>
     <tbody>
       <tr >
         <td style="text-align:center; width: 25%" > 
               <img src="{{asset("imagenes/libros2.jpg")}}" alt=""  width="150" height="150"/>
         </td>
        <td>
                              
               <table class="table table-striped table-bordered table-hover" >
               <thead  >
            <tr >
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
      <a href="{{route('obrasRegistros.create')}}" class="btn btn-info">Regresar</a>	
@stop
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos de Obra</h3>
</div>
<table class="table">
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
                {!!Form::label('fecha_publicacion','Fecha Publicación:')!!}
                    <div id="fecha_publicacion-group" >
                     {{$Obrasobj->fecha_publicacion}}
                   </div>
               </div>
  					<div class="col-md-4">
  					   	{!!Form::label('numeros_paginas','Numero Páginas:')!!}
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
                <div class="form-group">    
           {!!Form::label('disponibilidad','Disponibilidad:')!!}
           <div id="descripcion_obra-group" >
               @if(count($Obrasobj->isbns)>0)
	           		@foreach ($Obrasobj->isbns as $isbn)	           			
	           				{{$isbn->codigo_isbn}}&nbsp	           			
	           		@endforeach
           		@else 
           			<span class="noDisponible">No disponible</span>
           		@endif
             </div>
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

                    <td ></td>
                </tr>
            </tbody>
        </table>
	 			
   			</div>


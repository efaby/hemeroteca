<table class="table">
  <thead>
     <tr class="bg-info" style="background-color:#d3d3d3">
      	<th colspan="3">Registro de Informacion de la Obras </th>

     </tr>
     </thead>
     <tbody>
     	 <tr >
         <td style="text-align:center;" class="col-md-6"> 
               <img src="{{asset("imagenes/tiposobras.png")}}" alt=""  width="200" height="200"/>
         </td>
        <td > 
        <div class="form-group">
        	<div class="row">
        	        
  					<div class="col-md-3">
  					{!!Form::label('areas_idareas','Departamentos o Areas:')!!}
  					</div >
  					<div class="col-md-6">
  					<div id="areas_idareas-group" class="{!! $errors->has('areas_idareas') ? 'has-error' : '' !!}">
                     {!!Form::select('areas_idareas', $AreaobjActivo->lists('nombre_area', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opcion---', 'id' => 'areas_idareas'])!!}
                         <div class="help-text"></div>
  					</div>		        
			        </div>
			         <div class="col-md-1">

 			        	<a href="{{asset("verArea")}}" data-toggle="modal" data-target="#crearArea" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
 			        </div>
			</div>
			</div>

			<div class="form-group">
			<div class="row">
        	        
  					<div class="col-md-3">
  					{!!Form::label('tipo_registro_id','Tipos de Ingreso:')!!}
  					</div >
  					<div class="col-md-6">
  					<div id="tipo_registro_id-group" class="{!! $errors->has('tipo_registro_id') ? 'has-error' : '' !!}">
                     {!!Form::select('tipo_registro_id', $TipoRegistroobjActivo->lists('nombre_registro', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opcion---', 'id' => 'tipo_registro_id'])!!}
                         <div class="help-text"></div>
  					</div>		        
			        </div>
			         <div class="col-md-1">
 	             
 			        	<a  href="{{asset("verTipoRegistro")}}" data-toggle="modal" data-target="#crearRegistro" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
 			        </div>
			</div>
			</div>
			<div class="form-group">
			<div class="row">
        	        
  					<div class="col-md-3">
  					{!!Form::label('id_tipo','Tipo de Obra:')!!}
  					</div >
  					<div class="col-md-6">
  					<div id="tipos_obras_idtipos_obras-group" class="{!! $errors->has('tipos_obras_idtipos_obras') ? 'has-error' : '' !!}">
                     {!!Form::select('tipos_obras_idtipos_obras', $TipoObrasobjActivo->lists('nombre_tipos_obras', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opcion---', 'id' => 'tipos_obras_idtipos_obras'])!!}
                         <div class="help-text"></div>
  					</div>		        
			        </div>
			         <div class="col-md-1">
              
 			        	<a href="{{asset("verTipoObra")}}" data-toggle="modal" data-target="#crearObra" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
 			        </div>
			</div>
			</div>
						<div class="form-group">
			<div class="row">
        	        
  					<div class="col-md-3">
  					{!!Form::label('proveedor_idproveedor','Proeveedor:')!!}
  					</div >
  					<div class="col-md-6">
  					<div id="proveedor_idproveedor-group" class="{!! $errors->has('proveedor_idproveedor') ? 'has-error' : '' !!}">
                     {!!Form::select('proveedor_idproveedor', $ProveedoresobjActivo->lists('nombre_proveedor', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opcion---', 'id' => 'proveedor_idproveedor'])!!}
                         <div class="help-text"></div>
  					</div>		        
			        </div>
			         <div class="col-md-1">

 			        	<a href="{{asset("verProveedor")}}" data-toggle="modal" data-target="#crearProveedor" class="btn btn-primary" ><i class="fa fa-plus"></i></a> 
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
      	<th colspan="3">Datos Importantes de la Obras  </th>

     </tr>
     </thead>
     <tbody>
     	 <tr>
        
        <td > 
        <div class="form-group">
        	<div class="row">
        	        
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('titulo','Titulo Obra:')!!}
  					   </div>
  					    <div class="row">
  					    	<div class="col-md-11">
  					   	    <div id="titulo-group" class="form-group {!! $errors->has('titulo') ? 'has-error' : '' !!}">
                             {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'---Ingrese el Titulo---'])!!}
                           <div class="help-text"></div>
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
  					   	    <div id="autor-group" class="form-group {!! $errors->has('autor') ? 'has-error' : '' !!}">
                             {!!Form::text('autor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Autor---'])!!}
                           <div class="help-text"></div>
                          </div>

                    </div>      	
  					   </div>
  					 </div >
			       <div class="col-md-4">
               <div class="row">
                {!!Form::label('editorial','Editorial:')!!}
               </div>
                <div class="row">
                  <div >
                    <div id="editorial-group" class="form-group {!! $errors->has('editorial') ? 'has-error' : '' !!}">
                             {!!Form::text('editorial',null,['class'=>'form-control','placeholder'=>'---Ingrese el Editorial---'])!!}
                           <div class="help-text"></div>
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
  					   	    <div id="fecha_registro-group" class="form-group {!! $errors->has('fecha_registro') ? 'has-error' : '' !!}">
                          {!!Form::text('fecha_registro',$fechaActual,['class'=>'form-control','placeholder'=>$fechaActual,'readonly'])!!}
                           <div class="help-text"></div>
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
                    <div id="fecha_publicacion-group" class="form-group {!! $errors->has('fecha_publicacion') ? 'has-error' : '' !!}">
                             {!!Form::datetime('fecha_publicacion',null,['class'=>'form-control','placeholder'=>'---Formato : Anio / Mes / Dia---'])!!}
                           <div class="help-text"></div>
                          </div>  
                    </div> 
               </div>
             </div >
  					<div class="col-md-4">
  					   <div class="row">
  					   	{!!Form::label('numeros_paginas','Numero Pagina:')!!}
  					   </div>
  					    <div class="row">
  					   	    <div id="numeros_paginas-group" class="form-group {!! $errors->has('numeros_paginas') ? 'has-error' : '' !!}">
                             {!!Form::text('numeros_paginas',null,['class'=>'form-control','placeholder'=>'---Solo Numeros---'])!!}
                           <div class="help-text"></div>
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
                    <div id="descripcion_obra-group" class="form-group {!! $errors->has('descripcion_obra') ? 'has-error' : '' !!}">
                             {!!Form::text('descripcion_obra',null,['class'=>'form-control','placeholder'=>'---Descripcion---'])!!}
                           <div class="help-text"></div>
                    </div>  
              </div>
      </div>

         </td>
       </tr>
     </tbody>
     </table>
  

<!-- Modal Crear Area -->
<div class="modal fade" id="crearArea" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Area -->
<!-- Modal Crear Registro -->
<div class="modal fade" id="crearRegistro" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Registro -->

 <!-- Modal Crear Obra -->
<div class="modal fade" id="crearObra" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Obra -->

 <!-- Modal Crear Proveedor -->
<div class="modal fade" id="crearProveedor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Proveedor -->



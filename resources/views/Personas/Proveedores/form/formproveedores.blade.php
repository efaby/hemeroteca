        <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
          </button>
          <h3 class="text-center" id="myModalLabel">Datos del Proveedor</h3>
      </div>
     <br>
 <div class="col-md-6">
	<div class="row">
	<div class="col-md-12">
	    	{!!Form::label('cedula_proveedor','Cédula/Ruc')!!}
		    <div id="cedula_proveedor-group" class="form-group {!! $errors->has('cedula_proveedor') ? 'has-error' : '' !!}">
		       {!!Form::text('cedula_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese la Cedula/Ruc---'])!!}
		       <div class="help-text"></div>
		   </div>
	    </div>
	    
	</div>
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre_proveedor','Nombre')!!}
		       <div id="nombre_proveedor-group" class="form-group {!! $errors->has('nombre_proveedor') ? 'has-error' : '' !!}">
		        {!!Form::text('nombre_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombre---'])!!}
		        <div class="help-text"></div>
		    </div>
		</div>
	</div>
</div>
<div class="col-md-6" style="text-align: center; height: 180px;">
	<img src="imagenes/proveedor.jpg" alt=""
	width="150" />
</div>    
<div class="col-md-12" style="padding: 0px;">
<div class="col-md-6">
   {!!Form::label('direccion_proveedor','Dirección')!!}
   <div id="direccion_proveedor-group" class="form-group {!! $errors->has('direccion_proveedor') ? 'has-error' : '' !!}">
       {!!Form::text('direccion_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese la Direccion---'])!!}
       <div class="help-text"></div>
   </div>
   </div>
   <div class="col-md-6">
   {!!Form::label('telefono_proveedor','Telefono Convencional')!!}
   <div id="telefono_proveedor-group" class="form-group {!! $errors->has('telefono_proveedor') ? 'has-error' : '' !!}">
       {!!Form::text('telefono_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Telefono---'])!!}
       <div class="help-text"></div>
   </div>
   </div>
   </div>
   <div class="col-md-6">
   {!!Form::label('celular_proveedor','Telefono Móvil')!!}
   <div id="celular_proveedor-group" class="form-group {!! $errors->has('celular_proveedor') ? 'has-error' : '' !!}">
       {!!Form::text('celular_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Telefono---'])!!}
       <div class="help-text"></div>
   </div>
   </div>
   <div class="col-md-6">
   {!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div>
   
</div>




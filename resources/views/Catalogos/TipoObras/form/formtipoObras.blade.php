<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoObra'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Diferentes Obras </h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre_tipos_obras','Nombre Obra')!!}
                 <div id="nombre_tipos_obras-group" class="form-group {!! $errors->has('nombre_tipos_obras') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_tipos_obras',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                <div class="help-text"></div>
            </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('descripcion_tipos_obras','Funcionalidad Obra')!!}
                <div id="descripcion_tipos_obras-group" class="form-group {!! $errors->has('descripcion_tipos_obras') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_tipos_obras',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
                 <div class="help-text"></div>
            </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div>
	    </div>
	</div>
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/tiposobras.png")}}" alt=""
	width="150" />
</div>
		
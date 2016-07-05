
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='estado'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Estado de las Prestaciones Obras </h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre_estado_historial','Nombres Estado')!!}
                 <div id="nombre_estado_historial-group" class="form-group {!! $errors->has('nombre_estado_historial') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_estado_historial',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombre---'])!!}
                <div class="help-text"></div>
            </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('descripcion_estado_historial','Descripción del Estado')!!}
                <div id="descripcion_estado_historial-group" class="form-group {!! $errors->has('descripcion_estado_historial') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_estado_historial',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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
	<img src="{{asset("imagenes/historial.png")}}" alt=""
	width="150" />
</div>
			
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='area'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Departamento</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre_area','Nombres del Departamento')!!}
                 <div id="nombre_area-group" class="form-group {!! $errors->has('nombre_area') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_area',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombres---'])!!}
                <div class="help-text"></div>
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('descripcion_area','Descripción del Departamento')!!}
                <div id="descripcion_area-group" class="form-group {!! $errors->has('descripcion_area') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_area',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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
	<img src="{{asset("imagenes/area3.jpg")}}" alt=""
	width="150" />
</div>
		
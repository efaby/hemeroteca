<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoUsuario'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Administrador</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre','Nombres Administrador')!!}
                 <div id="nombre-group" class="form-group {!! $errors->has('nombre') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                    <div class="help-text"></div>
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('descripcion','Descripcion de la Administración')!!}
                <div id="descripcion-group" class="form-group {!! $errors->has('descripcion') ? 'has-error' : '' !!}">
                     {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripción---'])!!}
                     <div class="help-text"></div>
                </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/usuarioadministrador.jpg")}}" alt=""
	width="150" />
</div>	
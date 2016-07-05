        <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Administrador</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre','Nombres Completos')!!}
                 <div id="nombre-group" class="form-group {!! $errors->has('nombre') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                    <div class="help-text"></div>
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('Apellido','Apellidos Completos')!!}
                <div id="Apellido-group" class="form-group {!! $errors->has('Apellido') ? 'has-error' : '' !!}">
                     {!!Form::text('Apellido',null,['class'=>'form-control','placeholder'=>'---Ingrese los Apellidos---'])!!}
                     <div class="help-text"></div>
                </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	{!!Form::label('cedula','Cédula Identidad')!!}
                 <div id="cedula-group" class="form-group {!! $errors->has('cedula') ? 'has-error' : '' !!}">
                    {!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'---Ingrese la Cédula---'])!!}
                    <div class="help-text"></div>
                </div>
	    </div>
	</div>
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="imagenes/usuarios.png" alt=""
	width="150" />
</div>
<div class="col-md-12" style="padding: 0px;">
<div class="col-md-6">
	{!!Form::label('username','UserName')!!}
                 <div id="username-group" class="form-group {!! $errors->has('username') ? 'has-error' : '' !!}">
                    {!!Form::text('username',null,['class'=>'form-control','placeholder'=>'---Ingrese el Username---'])!!}
                    <div class="help-text"></div>
                </div>
</div>
<div class="col-md-6">	
	  {!!Form::label('password','Ingrese Contraseña')!!}
                 <div id="password-group" class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la Contraseña '])!!}
                    <div class="help-text"></div>
                </div>
</div>	
</div>
<div class="col-md-6">
	{!!Form::label('email','Correo Electronico')!!}
         <div id="email-group" class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
             {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'---Ingrese el Correo---'])!!}
             <div class="help-text"></div>
            </div>
</div>
<div class="col-md-6">
{!!Form::label('direccion','Dirección')!!}
    <div id="direccion-group" class="form-group {!! $errors->has('direccion') ? 'has-error' : '' !!}">
     {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'---Ingrese la Direccion---'])!!}
     <div class="help-text"></div>
    </div>
</div>
<div class="col-md-6">
   {!!Form::label('id_tipo','Tipo de Administrador:')!!}
      <div id="tipo_usuario_idtipo_usuario-group" class="form-group {!! $errors->has('tipo_usuario_idtipo_usuario') ? 'has-error' : '' !!}">
           {!!Form::select('tipo_usuario_idtipo_usuario', $tipos->lists('nombre', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opción---', 'id' => 'tipo_usuario_idtipo_usuario'])!!}
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




		

<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='cliente'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Cliente</h3>
</div>
<table class="table ">
    
     <tbody> 
        <tr>
         <td style="text-align:center;"> 
         <img src="imagenes/cliente.jpg" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                 {!!Form::label('nombre_cliente','Nombres Completos')!!}
                 <div id="nombre_cliente-group" class="form-group {!! $errors->has('nombre_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('apellido_cliente','Apellidos Completos')!!}
                <div id="apellido_cliente-group" class="form-group {!! $errors->has('apellido_cliente') ? 'has-error' : '' !!}">
                     {!!Form::text('apellido_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese los Apellidos---'])!!}
                     <div class="help-text"></div>
                </div>
                {!!Form::label('cedula_cliente','Cédula')!!}
                 <div id="cedula_cliente-group" class="form-group {!! $errors->has('cedula_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('cedula_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese la Cedula---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('email_cliente','Corrreo Electrónico')!!}
                 <div id="email_cliente-group" class="form-group {!! $errors->has('email_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('email_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese el Correo---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('direccion_cliente','Dirección')!!}
                 <div id="direccion_cliente-group" class="form-group {!! $errors->has('direccion_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('direccion_cliente',null,['class'=>'form-control','placeholder'=>'Ingresa la Direccion '])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('telefono_cliente','Télefono Convencional')!!}
                 <div id="telefono_cliente-group" class="form-group {!! $errors->has('telefono_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('telefono_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese el Telefono---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('celular_cliente','Télefono Celular')!!}
                 <div id="celular_cliente-group" class="form-group {!! $errors->has('celular_cliente') ? 'has-error' : '' !!}">
                    {!!Form::text('celular_cliente',null,['class'=>'form-control','placeholder'=>'---Ingrese el Celular---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('genero','Género')!!}
                 <div id="genero-group" class="form-group {!! $errors->has('genero') ? 'has-error' : '' !!}">
                {!! Form::select('genero',['placeholder'=>'----seleccione una opcion----','M' => 'Masculino','F' => 'Femenino'])!!}         
                  <div class="help-text"></div>
                </div>
                {!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div>
            </td>               
         </tr>
     </tbody>
 </table>



		
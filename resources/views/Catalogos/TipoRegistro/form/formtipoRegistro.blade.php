
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoRegistro'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Formas de Adquirir Obras</h3>
</div>
<table class="table ">
    
     <tbody> 
        <tr>
         <td style="text-align:center;"> 
         <img src="imagenes/adquisicion.jpg" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                </br>
                </br>
                 {!!Form::label('nombre_registro','Nombres ')!!}
                 <div id="nombre_registro-group" class="form-group {!! $errors->has('nombre_registro') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre_registro',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombre---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('descripcion_registro','Descripcion forma de Adquisicion')!!}
                <div id="descripcion_registro-group" class="form-group {!! $errors->has('descripcion_registro') ? 'has-error' : '' !!}">
                     {!!Form::text('descripcion_registro',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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



		
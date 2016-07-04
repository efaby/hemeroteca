
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='estado'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Estado de las Prestaciones Obras </h3>
</div>
<table class="table ">
     <tbody> 
        <tr>
         <td style="text-align:center;"> 
         <img src="imagenes/historial.png" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                </br>
                </br>
                 {!!Form::label('nombre_estado_historial','Nombres Estado')!!}
                 <div id="nombre_estado_historial-group" class="form-group {!! $errors->has('nombre_estado_historial') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_estado_historial',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombre---'])!!}
                <div class="help-text"></div>
            </div>
                {!!Form::label('descripcion_estado_historial','Descripción del Estado')!!}
                <div id="descripcion_estado_historial-group" class="form-group {!! $errors->has('descripcion_estado_historial') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_estado_historial',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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



		
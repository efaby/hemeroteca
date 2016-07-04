
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoObra'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Diferentes Obras </h3>
</div>
<table class="table ">
     <tbody> 
        <tr>
         <td style="text-align:center;"> 
         <img src="imagenes/tiposobras.png" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                </br>
                </br>
                 {!!Form::label('nombre_tipos_obras','Nombre Obra')!!}
                 <div id="nombre_tipos_obras-group" class="form-group {!! $errors->has('nombre_tipos_obras') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_tipos_obras',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                <div class="help-text"></div>
            </div>
                {!!Form::label('descripcion_tipos_obras','Funcionalidad Obra')!!}
                <div id="descripcion_tipos_obras-group" class="form-group {!! $errors->has('descripcion_tipos_obras') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_tipos_obras',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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



		
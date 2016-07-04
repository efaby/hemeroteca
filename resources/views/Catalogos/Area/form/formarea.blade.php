
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='area'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Departamento</h3>
</div>
<table class="table ">
      <tbody> 
        <tr>
         <td style="text-align:center;"> 
         
         <img src="{{asset("imagenes/area3.jpg")}}" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                </br>
                </br>
                 {!!Form::label('nombre_area','Nombres del Departamento')!!}
                 <div id="nombre_area-group" class="form-group {!! $errors->has('nombre_area') ? 'has-error' : '' !!}">
                {!!Form::text('nombre_area',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombres---'])!!}
                <div class="help-text"></div>
            </div>
                {!!Form::label('descripcion_area','Descripción del Departamento')!!}
                <div id="descripcion_area-group" class="form-group {!! $errors->has('descripcion_area') ? 'has-error' : '' !!}">
                 {!!Form::text('descripcion_area',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripcion---'])!!}
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



		
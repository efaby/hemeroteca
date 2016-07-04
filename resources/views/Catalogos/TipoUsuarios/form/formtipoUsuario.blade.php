
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoUsuario'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Administrador</h3>
</div>
<table class="table ">
    
     <tbody> 
        <tr>
         <td style="text-align:center;"> 
         <img src="imagenes/usuarioadministrador.jpg" alt=""  width="200" height="200"/>
         </td>
         
            <td > 
                </br>
                </br>
                 {!!Form::label('nombre','Nombres Administrador')!!}
                 <div id="nombre-group" class="form-group {!! $errors->has('nombre') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'---Ingrese los Nombres---'])!!}
                    <div class="help-text"></div>
                </div>
                {!!Form::label('descripcion','Descripcion de la Administración')!!}
                <div id="descripcion-group" class="form-group {!! $errors->has('descripcion') ? 'has-error' : '' !!}">
                     {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'---Ingrese una descripción---'])!!}
                     <div class="help-text"></div>
                </div>
             
            </td>                    
         </tr>
     </tbody>
 </table>



		
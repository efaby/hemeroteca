<div class="modal-header">
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
			 <label for="isbn"  >Nombre del Administrador</label>  
                 <div id="nombre-group" class="form-group">
                    {{$tiposUsuariosobj->nombre}}
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Descripción del Administrador</label>    
                <div id="descripcion-group" class="form-group ">
                     {{$tiposUsuariosobj->descripcion}}
                </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/usuarioadministrador.jpg")}}" alt=""
	width="150" />
</div>


     <div class="modal-footer">
     <table class="table ">   
            <tbody>
                <tr>
                    <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>
                </tr>
            </tbody>
    </table>
    </div>  

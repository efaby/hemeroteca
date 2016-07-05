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
			<label for="isbn" >Nombres Completos  </label>
                 <div id="nombre-group" class="form-group">
                   {{$Usuariosobj->nombre}}
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Apellidos Completos</label> 
                <div id="Apellido-group" class="form-group">
                     {{$Usuariosobj->Apellido}}
                </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Cédula Identidad</label>  
                 <div id="cedula-group" class="form-group ">
                    {{$Usuariosobj->cedula}}
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
	<label for="isbn"  >Username</label>    
                 <div id="username-group" class="form-group ">
                    {{$Usuariosobj->username}}
                </div>
</div>
<div class="col-md-6">	
	 <label for="isbn"  >Correo Electronico</label>    
                 <div id="password-group" class="form-group">
                    {{$Usuariosobj->email}}
                </div>
</div>	
</div>
<div class="col-md-6">
	 <label for="isbn"  >Dirección Domiciliaria</label>    
         <div id="email-group" class="form-group">
             {{$Usuariosobj->direccion}}
            </div>
</div>
<div class="col-md-6">
<label for="isbn"  >Tipo de Administrador </label> 
    <div id="direccion-group" class="form-group">
     {{$Usuariosobj->ListaRelacionadaTipoUsuario->nombre}}
    </div>
</div>
    <div class="modal-footer">
       <table class="table ">   
        <tbody>
            <tr>
                <td style="text-align: left;"><img src="imagenes/inpc.png" width="30%" /></td>
            </tr>
        </tbody>
    </table>
</div>  

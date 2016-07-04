        <div class="modal-header" style="background-color:#d3d3d3">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
          </button>
          <h3 class="text-center" id="myModalLabel">Datos del Administrador</h3>
      </div>
      <form class="form-horizontal">
        <table class="table">

           <tbody>  
               <tr>
                   <td ><img src="imagenes/usuarios.png" alt="" /></td>
                   <td > 

                    <td >
                    </br>
                    <div id="nombre-group"  >
                        <label for="isbn" >Nombres Completos  </label>
                    </div>
                    <div id="nombre-group" >
                        <text > {{$Usuariosobj->nombre}}</text>
                    </div>   

                    <div id="nombre-group" >
                        <label for="isbn"  >Apellidos Completos</label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->Apellido}}</text>           
                    </div>
                    <div id="nombre-group" >
                    <label for="isbn"  >Cédula Identidad</label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->cedula}}</text>           
                    </div>   
                    <div id="nombre-group" >
                        <label for="isbn"  >Username</label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->username}}</text>           
                    </div>   
                    <div id="nombre-group" >
                        <label for="isbn"  >Correo Electronico</label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->email}}</text>           
                    </div>   
                    <div id="nombre-group" >
                        <label for="isbn"  >Dirección Domiciliaria</label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->direccion}}</text>           
                    </div> 
                    <div id="nombre-group" >
                        <label for="isbn"  >Tipo de Administrador </label>    
                    </div> 
                    <div > 
                        <text > {{$Usuariosobj->ListaRelacionadaTipoUsuario->nombre}}</text>           
                    </div> 

                </td>            
            </tr>

        </tbody>

    </table>

    <div class="modal-footer">
       <table class="table ">   
        <tbody>
            <tr>
                <td style="text-align: left;"><img src="imagenes/inpc.png" width="30%" /></td>
            </tr>
        </tbody>
    </table>
</div>  
</form>
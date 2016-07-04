
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='cliente'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del CLientes</h3>
</div>
    <form class="form-horizontal">
    <table class="table">
    
     <tbody>  
         <tr>
         <td ><img src="imagenes/cliente.jpg" alt="" /></td>
        <td > 
            
         <td >
            </br>
             <div id="nombre-group"  >
                <label for="isbn" >Nombres Completos  </label>
            </div>
            <div id="nombre-group" >
                <text > {{$Clientesobj->nombre_cliente}}</text>
            </div>   
     
            <div id="nombre-group" >
                <label for="isbn"  >Apellidos Completos</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->apellido_cliente}}</text>           
             </div>
             <div id="nombre-group" >
                <label for="isbn"  >Cédula</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->cedula_cliente}}</text>           
             </div>   
             <div id="nombre-group" >
                <label for="isbn"  >Correo Electrónico</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->email_cliente}}</text>           
             </div>   
             <div id="nombre-group" >
                <label for="isbn"  >Dirección Domiciliaria</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->direccion_cliente}}</text>           
             </div>   
             <div id="nombre-group" >
                <label for="isbn"  >Teléfono Convencional</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->telefono_cliente}}</text>           
             </div> 
              <div id="nombre-group" >
                <label for="isbn"  >Teléfono Movil</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->celular_cliente}}</text>           
             </div> 
              <div id="nombre-group" >
                <label for="isbn"  >Género</label>    
            </div> 
              <div > 
                <text > {{$Clientesobj->genero}}</text>           
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
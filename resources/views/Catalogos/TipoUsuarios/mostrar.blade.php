
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoUsuario'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Administrador</h3>
</div>
    <form class="form-horizontal">
    <table class="table">
    
     <tbody>  
         <tr>
         <td ><img src="imagenes/usuarioadministrador.jpg" alt="" /></td>
        <td > 
            
        <td >
            </br>
            </br>
            </br>
             <div id="nombre-group"  >
                <label for="isbn" >Nombre </label>
            </div>
            <div id="nombre-group" >
                <text > {{$tiposUsuariosobj->nombre}}</text>
            </div>   
            </br>
            <div id="nombre-group" >
                <label for="isbn"  >Descripción del Administrador</label>    
            </div> 
              <div > 
                <text > {{$tiposUsuariosobj->descripcion}}</text>           
             </div>    
          </td>            
         </tr>

     </tbody>

 </table>

     <div class="modal-footer">
     <table class="table ">   
            <tbody>
                <tr>
                    <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>
                </tr>
            </tbody>
    </table>
    </div>  
 </form>
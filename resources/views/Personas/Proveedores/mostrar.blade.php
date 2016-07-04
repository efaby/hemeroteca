
<div class="modal-header" style="background-color:#d3d3d3">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
  </button>
  <h3 class="text-center" id="myModalLabel">Datos del Proveedores</h3>
</div>
<form class="form-horizontal">
    <table class="table">

       <tbody>  
           <tr>
               <td ><img src="imagenes/proveedor.jpg" alt="" width="200" height="200"/></td>
               <td > 

                <td >
                </br>
            </br>
            <div id="nombre-group"  >
            <label for="isbn" >Nombre/Institución</label>
            </div>
            <div id="nombre-group" >
                <text > {{$Proveedoresobj->nombre_proveedor}}</text>
            </div>   
            <div id="nombre-group" >
                <label for="isbn"  >Cédula/Ruc</label>    
            </div> 
            <div > 
                <text > {{$Proveedoresobj->cedula_proveedor}}</text>           
            </div> 
            <div id="nombre-group" >
                <label for="isbn"  >Dirección Domiciliaria/Laboral</label>    
            </div> 
            <div > 
                <text > {{$Proveedoresobj->direccion_proveedor}}</text>           
            </div> 
            <div id="nombre-group" >
                <label for="isbn"  >Teléfono Convencional</label>    
            </div> 
            <div > 
                <text > {{$Proveedoresobj->telefono_proveedor}}</text>           
            </div> 
            <div id="nombre-group" >
                <label for="isbn"  >Celular Móvil </label>    
            </div> 
            <div > 
                <text > {{$Proveedoresobj->celular_proveedor}}</text>           
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
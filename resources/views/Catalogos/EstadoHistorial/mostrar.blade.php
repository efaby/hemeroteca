
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='estado'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Estados de Prestaciones de Obras</h3>
</div>
    <form class="form-horizontal">
    <table class="table">

     <tbody>  
         <tr>
         <td > <img src="imagenes/historial.png" width='200' height='200' /></td>
        <td > 
            
        <td >
            </br>
             <div id="nombre_estado_historial-group"  >
                <label for="isbn" >Nombre </label>
            </div>
            <div id="nombre_estado_historial-group" >
                <text id="nombre_estado_historial"> {{$EstadoHistorialobj->nombre_estado_historial}}</text>
            </div>   
            </br>
            <div id="descripcion_estado_historial-group" >
                <label for="isbn"  >Descripcion del Estado </label>    
            </div> 
              <div > 
                <text id="descripcion_estado_historial"> {{$EstadoHistorialobj->descripcion_estado_historial}}</text>           
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
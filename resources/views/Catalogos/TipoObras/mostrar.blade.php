
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoObra'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos de la Obra</h3>
</div>
    <form class="form-horizontal">
    <table class="table">

     <tbody>  
         <tr>
         <td > <img src="imagenes/tiposobras.png" width='200' height='200' /></td>
        <td > 
            
        <td >
            </br>
            </br>
             <div id="nombre-group"  >
                <label for="isbn" >Nombre </label>
            </div>
            <div id="nombre-group" >
                <text id="nombre_tipos_obras"> {{$tipoObrasobj->nombre_tipos_obras}}</text>
            </div>   
            </br>
            <div id="nombre-group" >
                <label for="isbn"  >Descripción de la Obra</label>    
            </div> 
              <div > 
                <text id="descripcion_tipos_obras"> {{$tipoObrasobj->descripcion_tipos_obras}}</text>           
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
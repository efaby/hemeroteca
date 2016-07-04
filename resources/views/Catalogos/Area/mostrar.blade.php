
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='area'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Departamentos del Instituto</h3>
</div>
    <form class="form-horizontal">

 <table class="table">

     <tbody>  
         <tr>
         <td > <img src="imagenes/area3.jpg" width='200' height='200' /></td>
        <td > 
            
        <td >
            </br>
             <div id="nombre-group"  >
                <label for="isbn" >Nombre </label>
            </div>
            <div id="nombre-group" >
                <text id="nombre_area"> {{$areasobj->nombre_area}}</text>
            </div>   
            </br>
            <div id="nombre-group" >
                <label for="isbn"  >Descripcion del Administrador</label>    
            </div> 
              <div > 
                <text id="descripcion_area"> {{$areasobj->descripcion_area}}</text>           
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
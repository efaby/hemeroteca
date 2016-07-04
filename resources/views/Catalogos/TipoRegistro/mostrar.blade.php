
<div class="modal-header" style="background-color:#d3d3d3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoRegistro'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Formas de Adquirir Obras</h3>
</div>
    <form class="form-horizontal">
    <table class="table">
    
     <tbody>  
         <tr>
         <td ><img src="imagenes/adquisicion.jpg" alt="" /></td>
        <td > 
            
        <td >
            </br>
            </br>
            </br>
             <div id="nombre_registro-group"  >
                <label for="isbn" >Nombre </label>
            </div>
            <div id="nombre_registro-group" >
                <text > {{$TipoRegistroobj->nombre_registro}}</text>
            </div>   
            </br>
            <div id="nombre-group" >
                <label for="isbn"  >Descripcion forma de Adquisicion</label>    
            </div> 
              <div > 
                <text > {{$TipoRegistroobj->descripcion_registro}}</text>           
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
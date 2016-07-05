
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='estado'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Estados de Prestaciones de Obras</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			 <label for="isbn" >Nombre </label>
                 <div id="nombre_estado_historial-group" class="form-group">
                {{$EstadoHistorialobj->nombre_estado_historial}}
            </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	 <label for="isbn"  >Descripcion del Estado </label>   
	    	 <div id="descripcion_estado_historial-group" class="form-group">
                {{$EstadoHistorialobj->descripcion_estado_historial}}
            </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/historial.png")}}" alt=""
	width="150" />
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

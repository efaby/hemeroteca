
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoObra'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos de la Obra</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			<label for="isbn" >Nombre </label>
                 <div id="nombre_tipos_obras-group" class="form-group">
                {{$tipoObrasobj->nombre_tipos_obras}}
            </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Descripción de la Obra</label>    
                <div id="descripcion_tipos_obras-group" class="form-group">
                 {{$tipoObrasobj->descripcion_tipos_obras}}
            </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/tiposobras.png")}}" alt=""
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

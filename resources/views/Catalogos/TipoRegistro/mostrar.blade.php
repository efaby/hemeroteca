
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='tipoRegistro'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Formas de Adquirir Obras</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			<label for="isbn" >Nombre </label>
                 <div id="nombre_registro-group" class="form-group">
                    {{$TipoRegistroobj->nombre_registro}}
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Descripcion forma de Adquisicion</label>    
                <div id="descripcion_registro-group" class="form-group ">
                     {{$TipoRegistroobj->descripcion_registro}}
                </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/adquisicion.jpg")}}" alt=""
	width="150" />
</div>
     <div class="modal-footer">
     <table class="table ">
    
            <tbody>
                <tr>
                    <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>
                </tr>
            </tbody>
    </table>
    </div>  

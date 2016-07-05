
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='area'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Departamentos del Instituto</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			<label for="isbn" >Nombre </label>
                 <div id="nombre_area-group" class="form-group">
                {{$areasobj->nombre_area}}
                </div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Descripcion del Departamento</label> 
                <div id="descripcion_area-group" class="form-group {!! $errors->has('descripcion_area') ? 'has-error' : '' !!}">
                 {{$areasobj->descripcion_area}}
            </div>
	    </div>
	</div>
	
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="{{asset("imagenes/area3.jpg")}}" alt=""
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

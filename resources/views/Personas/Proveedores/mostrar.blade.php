
<div class="modal-header" >
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
  </button>
  <h3 class="text-center" id="myModalLabel">Datos del Proveedores</h3>
</div>
<br>
<div class="col-md-6">
	<div class="row">
	<div class="col-md-12">
	    	<label for="isbn"  >Cédula/Ruc</label>    
		    <div id="cedula_proveedor-group" class="form-group ">
		       {{$Proveedoresobj->cedula_proveedor}}
		   </div>
	    </div>
	    
	</div>
	<div class="row">
	    <div class="col-md-12">
	    <label for="isbn" >Nombre/Institución</label>         
		       <div id="nombre_proveedor-group" class="form-group ">
		        {{$Proveedoresobj->nombre_proveedor}}
		    </div>
		</div>
	</div>
</div>
<div class="col-md-6" style="text-align: center;">
	<img src="imagenes/proveedor.jpg" alt=""
	width="150" />
</div>    
<div class="col-md-12" style="padding: 0px;">
<div class="col-md-6">
   <label for="isbn"  >Dirección Domiciliaria/Laboral</label>
   <div id="direccion_proveedor-group" class="form-group ">
       {{$Proveedoresobj->direccion_proveedor}}
   </div>
   </div>
   <div class="col-md-6">
    <label for="isbn"  >Teléfono Convencional</label>    
   <div id="telefono_proveedor-group" class="form-group">
       {{$Proveedoresobj->telefono_proveedor}}
   </div>
   </div>
   </div>
   <div class="col-md-6">
   <label for="isbn"  >Celular Móvil </label>    
   <div id="celular_proveedor-group" class="form-group {!! $errors->has('celular_proveedor') ? 'has-error' : '' !!}">
       {{$Proveedoresobj->celular_proveedor}}
   </div>
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

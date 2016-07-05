
<div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='cliente'">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Cliente</h3>
</div>
    
    <div class="col-md-6">
	<div class="row">
	    <div class="col-md-12">
			<label for="isbn" >Nombres Completos  </label>
			<div id="nombre_cliente-group" class="form-group">
				{{$Clientesobj->nombre_cliente}}
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Apellidos Completos</label>   
			<div id="apellido_cliente-group" class="form-group ">
				{{$Clientesobj->apellido_cliente}}
			</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	    	<label for="isbn"  >Cédula</label> 
			<div id="cedula_cliente-group" class="form-group ">
				{{$Clientesobj->apellido_cliente}}
			</div>
	    </div>
	</div>
</div>
<div class="col-md-6" style="text-align: center; height: 185px;">
	<img src="imagenes/cliente.jpg" alt=""
	width="150" />
</div>
<div class="col-md-6">
	<label for="isbn"  >Correo Electrónico</label>    
	<div id="email_cliente-group" class="form-group ">
		{{$Clientesobj->email_cliente}}
	</div> 
</div>
<div class="col-md-6">	
	<label for="isbn"  >Dirección Domiciliaria</label>    
	<div id="direccion_cliente-group" class="form-group">
		{{$Clientesobj->direccion_cliente}}
	</div> 
</div>	
<div class="col-md-6">	
	<label for="isbn"  >Teléfono Convencional</label>    
	<div id="telefono_cliente-group" class="form-group ">
		{{$Clientesobj->telefono_cliente}}
	</div> 
</div>
<div class="col-md-6">	
	<label for="isbn"  >Teléfono Movil</label>    
	<div id="celular_cliente-group" class="form-group">
		{{$Clientesobj->celular_cliente}}
	</div> 
</div>
<div class="col-md-6">	
	 <label for="isbn"  >Género</label>    
	<div id="genero-group" class="form-group ">
		@if($Clientesobj->genero == 'M')
		Masculino
		 @else 
		Femenido
		 @endif 
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

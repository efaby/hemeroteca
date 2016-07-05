@include('alertas.peticionesGenerales')
	
	{!!Form::open(['route'=>'proveedor.store', 'method'=>'POST', 'id' => 'frmTest'])!!}
			
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h3 class="text-center" id="myModalLabel">Datos del Proveedor</h3>
</div>
<br>
 <div class="col-md-6">
	<div class="row">
	<div class="col-md-12">	    	
	    {!!Form::label('cedula_proveedor','Cedula/Ruc')!!}
                <div id="cedula_proveedor-group" class="form-group {!! $errors->has('cedula_proveedor') ? 'has-error' : '' !!}">
                     {!!Form::text('cedula_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese la Cedula/Ruc---'])!!}
                     <div class="help-text"></div>
                </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
			{!!Form::label('nombre_proveedor','Nombre')!!}
                 <div id="nombre_proveedor-group" class="form-group {!! $errors->has('nombre_proveedor') ? 'has-error' : '' !!}">
                    {!!Form::text('nombre_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Nombre---'])!!}
                    <div class="help-text"></div>
                </div>
		</div>
	</div>
</div>
<div class="col-md-6" style="text-align: center; height: 180px;">
	<img src="imagenes/proveedor.jpg" alt=""
	width="150" />
</div>    
<div class="col-md-12" style="padding: 0px;">
<div class="col-md-6">
   {!!Form::label('direccion_proveedor','Direccion')!!}
                <div id="direccion_proveedor-group" class="form-group {!! $errors->has('direccion_proveedor') ? 'has-error' : '' !!}">
                     {!!Form::text('direccion_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese la Direccion---'])!!}
                     <div class="help-text"></div>
                </div>
   </div>
   <div class="col-md-6">
    {!!Form::label('telefono_proveedor','Telefono Convencional')!!}
                <div id="telefono_proveedor-group" class="form-group {!! $errors->has('telefono_proveedor') ? 'has-error' : '' !!}">
                     {!!Form::text('telefono_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Telefono---'])!!}
                     <div class="help-text"></div>
                </div>
   </div>
   </div>
   <div class="col-md-6">
    {!!Form::label('celular_proveedor','Telefono Movil')!!}
                <div id="celular_proveedor-group" class="form-group {!! $errors->has('celular_proveedor') ? 'has-error' : '' !!}">
                     {!!Form::text('celular_proveedor',null,['class'=>'form-control','placeholder'=>'---Ingrese el Telefono---'])!!}
                     <div class="help-text"></div>
                </div>
   </div>
   <div class="col-md-6">
   {!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div>
   
</div>

 <div class="modal-footer">

    <table class="table ">
        
        <tbody>
            <tr>
            
                <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>

                <td >{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}</td>
            </tr>
        </tbody>
    </table>
    
</div>
	{!!Form::close()!!}
	
<script type="text/javascript">

$('document').ready(function(){


  $('#frmTest').on('submit',function(e){
    var $form = $(this);
    e.preventDefault(); //keeps the form from behaving like a normal (non-ajax) html form
    var url = $form.attr('action');
    var formData = {};
    //submit a POST request with the form data
    $form.find('input').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
     $form.find('select').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
    //submits an array of key-value pairs to the form's action URL
    
    $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: 'json',
            cache: false,            
        // Response.
        }).always(function(response, status) {
            // Check for errors.
            if (response.status == 422) {
                var errors = $.parseJSON(response.responseText);
                //errors = response.responseJSON;        
                associate_errors(errors, $form);
            } else {
            	location.reload();
            }
    
    
    });
});

function associate_errors(errors, $form)
{
    $form.find('.form-group').removeClass('has-error').find('.help-text').text('');
    $.each(errors, function(field, message) {
        var $group = $form.find('#' + field + '-group');
        $group.addClass('has-error').find('.help-text').text(message);
    })
}

});
</script>

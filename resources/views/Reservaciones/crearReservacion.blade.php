 @extends ('layout.templateAdministacion')
 @section('content')

<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header"> {{$titulo}} Obra</h1>
	</div>
	<div class="col-lg-12">
@if($errors->has())
            <div class="alert alert-warning" role="alert">
               @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
        @endif </br> 
<span class="rowListado"><span class="labelListado">Título:</span>{{
				$obra->isbnObras->titulo }}</span> <span class="rowListado"><span
				class="labelListado">Autor:</span>{{ $obra->isbnObras->autor }}</span>
			<span class="rowListado"><span class="labelListado">Area:</span>{{
				$obra->isbnObras->ListaRelacionadaArea->nombre_area }}</span> <span
			class="rowListado"><span class="labelListado">Editorial:</span>{{
				$obra->isbnObras->editorial }}</span> <span class="rowListado"><span
				class="labelListado">ISBN:</span>{{$obra->codigo_isbn}}</span></td>
{!!Form::open(['route'=>'cliente.buscarCliente', 'method'=>'POST', 'id' =>
'frmBuscar'], array('class'=>'ajax'))!!}
<table class="table ">
	<tr>
		<td style="width: 15%">{!!Form::label('cedula_cliente','Cédula Cliente')!!}</td>
		<td style="width: 30%">{!!Form::text('cedula_cliente',null,['class'=>'form-control','placeholder'=>'---Cedula---'])!!}</td>
		<td>{!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
		&nbsp;<a href="{{asset("vercliente")}}" data-toggle="modal"
				data-target="#crearCliente" class="btn btn-primary"><i
				class="fa fa-plus"></i></a></td>
	</tr>
</table>
{!!Form::close()!!}

<div id="cliente">
	<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>Cédula</th>
		<th>Nombres</th>
		<th>Dirección</th>
		<th>Email</th>		
	</tr>
	<tr>
		<td><span id="cedula"></span></td>
		<td><span id="nombre"></span></td>
		<td><span id="direccion"></span></td>
		<td><span id="email"></span></td>
	</tr>
</table>

</div>
{!!Form::open(['route'=>'reservaciones.store', 'method'=>'POST', 'id' =>
'frmGuardar'], array('class'=>'ajax'))!!}
	<div class="row">
    <div class="col-md-6">
       {!!Form::label('fecha_reservacion','Fecha Préstamo')!!}  
    	{!!Form::text('fecha_reservacion',$fechaActual,['class'=>'form-control','readonly'])!!}
    </div>  
    <div class="col-md-6">
    @if($estado == 2)
       {!!Form::label('numeros_dias','Números de Dias')!!}
       {!!Form::text('numeros_dias',null,['class'=>'form-control'])!!}
     @endif
     </div>  
     <div class="col-md-12">
     <br>
      	{!!Form::submit('Registro',['class'=>'btn btn-primary disabled', 'id'=>'btnGuardar'])!!} 
      	{!!Form::hidden('cliente_id',0,['id'=>'cliente_id'])!!}  
      	{!!Form::hidden('isbn_id',$obra->id,['id'=>'isbn_id'])!!}  
      	{!!Form::hidden('estado',$estado,['id'=>'estado'])!!}    
      	@if($estado == 3)
      		{!!Form::hidden('numeros_dias',1,['id'=>'numeros_dias'])!!}   
      	@endif
      	&nbsp;
      	 <a href="{{route('reservaciones.buscarObra',$opcion)}}" class="btn btn-warning" >Cancelar</a>     
      </div>
                 
    </div>
    {!!Form::close()!!}
</div>
</div>

<div class="modal fade" id="crearCliente" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >    
    <div class="modal-content">
    </div>
  </div>
</div>

<script type="text/javascript">

$('document').ready(function(){

	
  $('#frmBuscar').on('submit',function(e){
    var $form = $(this);
    e.preventDefault();
    var url = $form.attr('action');
    var formData = {};
    $form.find('input', 'select').each(function(){
        formData[ $(this).attr('name') ] = $(this).val();
    });    
    $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: 'json',
            cache: false,            
        // Response.
        }).always(function(response, status) {
            if(response.id === undefined){
            	alert('no existe usuario');
            	$("#btnGuardar").addClass('disabled');
            } else {
            	$("#nombre").empty().html(response.nombre_cliente + ' ' +response.apellido_cliente);
            	$("#cedula").empty().html(response.cedula_cliente);
            	$("#email").empty().html(response.email_cliente);
            	$("#direccion").empty().html(response.direccion_cliente);
            	$("#cliente_id").val(response.id);
            	$("#btnGuardar").removeClass('disabled');
            }
    	
    });
});
  
  $("#frmGuardar").bootstrapValidator({
  	message: 'This value is not valid',	
	fields: {			
		numeros_dias: {
			message: 'El Número de días no es válido',
			validators: {
						notEmpty: {
							message: 'El Número de días no puede ser vacío.'
						},					
						regexp: {
							regexp: /^[1-9]{1}$|^10$/,
							message: 'El Número de días no puede ser mayor a 10.'
						}
					}
				},
		
	}
});


});

</script>
@stop
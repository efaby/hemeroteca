 @extends ('layout.templateAdministacion')
 @section('content')

<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Devolución de Obras</h1>
	</div>
	<div class="col-lg-12">
	
	@if ($mensaje != '')
		<div class="alert alert-success fade in alert-dismissable">
				<button type="button" class="close" data-dismiss="alert"
					aria-hidden="true">&times;</button>
								  {{ $mensaje }}
								</div>
	@endif
	
	{!!Form::open(['route'=>['reservaciones.devolucionObra'],'method'=>'POST','role'=>'search', 'id'=>'frmBuscar']) !!}
      <table class="table">
        <tr>            
            <td> 
            	{!!Form::text('texto_buscar',$textoBuscar,['id'=>'texto_buscar','class'=>'form-control','placeholder'=>'ISBN'])!!}
            </td>
            <td style="vertical-align: middle; width: 7%;">
            	 {!!Form::label('fecha_inicio','Desde')!!}
            	 </td>
            <td style="width: 15%;">
            	 {!!Form::text('fecha_inicio',$fechaInicio,['id'=>'fecha_inicio','class'=>'form-control','placeholder'=>'Fecha Inicio'])!!}
           	</td>
            <td style="vertical-align: middle; width: 7%;">	
            	{!!Form::label('fecha_inicio','Hasta')!!} 
            	</td>
            <td style="width: 15%;">
            	 {!!Form::text('fecha_fin',$fechaFin,['id'=>'fecha_fin','class'=>'form-control','placeholder'=>'Fecha Fin'])!!}      		
            </td>
            <td> {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
            	<button type="button" class="btn btn-warning" title="Resetear" id="clear-search-button">
					<i class="fa fa-times"></i>
				</button>
            </td>
        </tr>      	
	</table>
	{!!Form::close()!!}
</div>
</div>
@if($resultado)
<div class="row">
  	<div class="col-lg-12">
  	<p>Total {{count($listadoObras)}} Registros</p>
  	<table class="table">
  		 @foreach ($listadoObras as $item)
         <tr>
           <td>
           	<span class="rowListado"><span class="labelListado">Título:</span>	           	
	          	<a href="{{route('reservaciones.verObra',$item->RelacionDonacionesHistorialIsbn->isbnObras->id)}}" data-toggle="modal" data-target="#mostrarObra" >{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</a>
	          	<a href="javascript:javascript:if(confirm('Está seguro que desea Devolver la Obra seleccionada?\n\nTítulo:{{$item->RelacionDonacionesHistorialIsbn->isbnObras->titulo}}\nISBN:{{$item->RelacionDonacionesHistorialIsbn->codigo_isbn}}')){redirect({{$item->id}});}" 
	          	class="btn btn-xs btn-danger btn-outline" >Devolver</a>	           		           	
           	</span>           	
           	<span class="rowListado"><span class="labelListado">Autor:</span>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->autor }}</span>         	   	
           	<span class="rowListado"><span class="labelListado">ISBN:</span>{{ $item->RelacionDonacionesHistorialIsbn->codigo_isbn }}</span>
           	<span class="rowListado"><span class="labelListado">Fecha Devolución:</span>{{ $item->fecha_devolucion}}</span>
           	<span class="rowListado"><span class="labelListado">Cliente:</span>{{ $item->ListaRelacionadaCliente->nombre_cliente }} {{ $item->ListaRelacionadaCliente->apellido_cliente }}</span>                    
           </td>          
         </tr>
         @endforeach
  	</table>
  	  	{!!$listadoObras->render()!!}
  	</div>
</div>
{!!Form::open(['route'=>['reservaciones.devolverObra'],'method'=>'POST','role'=>'search', 'id'=>'frmGuardar']) !!}
	{!!Form::hidden('id',0,['id'=>'id'])!!}  
{!!Form::close()!!}
@endif
  <div class="modal fade" id="mostrarObra" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div> 

<script type="text/javascript">
jQuery(document).ready(function () {

	jQuery( "#fecha_inicio" ).datepicker({  
		dateFormat: "yy-mm-dd",
		onClose: function( selectedDate ) {
	        $( "#fecha_fin" ).datepicker( "option", "minDate", selectedDate );
	      }  		
	});
	jQuery( "#fecha_fin" ).datepicker({  
		dateFormat: "yy-mm-dd",
		onClose: function( selectedDate ) {
	        $( "#fecha_inicio" ).datepicker( "option", "maxDate", selectedDate );
	      }  		
	});
	
jQuery('#clear-search-button').on('click', function () {
	jQuery('#texto_buscar').val('');
	jQuery('#fecha_inicio').val('');
	jQuery('#fecha_fin').val('');
	jQuery('#frmBuscar').submit();
});
});

function redirect($id){
	jQuery('#id').val($id);
	jQuery('#frmGuardar').submit();
}


</script>
@stop
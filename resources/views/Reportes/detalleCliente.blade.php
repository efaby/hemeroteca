@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Reporte Obras Prestadas / Donadas</h1>
	</div>
	<div class="col-lg-12">
	<div style="padding-bottom: 20px; text-align: right;"> <button id="btnPdf" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
	<button id="btnDescargar" class="btn btn-success"><i  class="fa fa-download" aria-hidden="true"></i></button>
	</div>
        <table>
        <tr><td><strong>Cliente:</strong></td><td>{{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</td></tr>
        <tr><td><strong>Dirección:</strong></td><td>{{ $cliente->direccion_cliente }}</td></tr>
        <tr><td><strong>Teléfonos:</strong></td><td>{{ $cliente->telefono_cliente }} - {{ $cliente->celular_cliente }}</td></tr>
        <tr><td><strong>Email:</strong></td><td>{{ $cliente->email_cliente }}</td></tr>
        </table>
		{!!Form::open(['method'=>'POST','class'=>'navbar-form navbar-left pull-right','role'=>'search','id'=>'frmBuscar'])!!}
        <div id="form-group"  >
          {!!Form::select('estado', array('' => 'Todos', 'pres' => 'Prestados', 'don' => 'Donados'), $estado)!!}
          {!!Form::hidden('tipo',0,['id'=>'tipo'])!!}   
          {!!Form::submit('Buscar',['class'=>'btn btn-primary','id'=>'btnBuscar'])!!}
        </div>
        {!!Form::close()!!}
        <p>Total {{$listado->total()}} Registros</p>
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th>ISBN </th>
            <th>Título </th>
            <th>Fecha Préstamo</th>
            <th>Fecha Entrega</th>   
            <th>Estado</th>          
          </tr>
        </thead>
        <tbody>

         @foreach ($listado as $item)
         <tr>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->codigo_isbn }}</td>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</td>           
           <td>{{ $item->fecha_reservacion }}</td>
           <td>@if($item->prestacion_donacion == "pres")
           			{{ $item->fecha_devolucion }} 
           		@endif           
           </td>
           <td> @if($item->prestacion_donacion == "don")
           			Donada       			
           		@else
           			@if($item->activo == 1)
           			Prestada
           			@else
           			Entregada
           			@endif
           		@endif
           </td>
         </tr>
         @endforeach
       </tbody>
     </table>
{!!$listado->render()!!}

   </div>
 </div>
 
 <a href="{{route('reporte.clientes')}}" class="btn btn-info">Regresar</a>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#btnBuscar').click(function(){
		var accion = "{{route('reporte.detalleCliente',$id)}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '');
			$("#frmBuscar").submit();		
	});

	$('#btnPdf').click(function(){
		var accion = "{{route('reporte.exportarClienteDetalles',$id)}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '_blank');
			$("#tipo").val(1);
			$("#frmBuscar").submit();		
	});

	$('#btnDescargar').click(function(){
		var accion = "{{route('reporte.exportarClienteDetalles',$id)}}"			
			$("#frmBuscar").attr('action', accion);
			$("#tipo").val(2);
			$("#frmBuscar").submit();		
	});
	
});

</script>

@stop
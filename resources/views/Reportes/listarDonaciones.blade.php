@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Reporte Obras Donadas</h1>
	</div>
	<div class="col-lg-12">
	<div style="padding-bottom: 20px; text-align: right;"> <button id="btnPdf" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
	<button id="btnDescargar" class="btn btn-success"><i  class="fa fa-download" aria-hidden="true"></i></button>
	</div>
        {!!Form::open(['method'=>'POST','class'=>'navbar-form navbar-left pull-right','role'=>'search','id'=>'frmBuscar'])!!}
        <div id="form-group"  >
        {!!Form::label('fecha_inicio','Desde')!!}
          {!!Form::text('fecha_inicio',$fechaInicio,['id'=>'fecha_inicio','class'=>'form-control','placeholder'=>'Fecha Inicio'])!!}
          {!!Form::label('fecha_inicio','Hasta')!!} 
          {!!Form::text('fecha_fin',$fechaFin,['id'=>'fecha_fin','class'=>'form-control','placeholder'=>'Fecha Fin'])!!}      		
          {!!Form::hidden('tipo',0,['id'=>'tipo'])!!}   
          {!!Form::submit('Buscar',['class'=>'btn btn-primary','id'=>'btnBuscar'])!!}
          <button type="button" class="btn btn-warning" title="Resetear" id="clear-search-button">
					<i class="fa fa-times"></i>
				</button>
        </div>
        {!!Form::close()!!}

        <p>Total {{$listado->total()}} Registros</p>
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th>ISBN </th>
            <th>Título </th>
            <th>Area </th>
            <th>Tipo </th>
            <th>Cliente</th>
            <th>Fecha Donacion</th>                    
          </tr>
        </thead>
        <tbody>

         @foreach ($listado as $item)
         <tr>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->codigo_isbn }}</td>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</td>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->ListaRelacionadaArea->nombre_area  }}</td>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->ListaRelacionadaTipoObras->nombre_tipos_obras }}</td>
           <td>{{ $item->ListaRelacionadaCliente->nombre_cliente }} {{ $item->ListaRelacionadaCliente->apellido_cliente }}</td>
           <td>{{ $item->fecha_reservacion }}</td>
          
         </tr>
         @endforeach
       </tbody>
     </table>
{!!$listado->render()!!}

   </div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#btnBuscar').click(function(){
		var accion = "{{route('reporte.donaciones')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '');
			$("#frmBuscar").submit();		
	});

	$('#btnPdf').click(function(){
		var accion = "{{route('reporte.obrasExportarDonaciones')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '_blank');
			$("#tipo").val(1);
			$("#frmBuscar").submit();		
	});

	$('#btnDescargar').click(function(){
		var accion = "{{route('reporte.obrasExportarDonaciones')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#tipo").val(2);
			$("#frmBuscar").submit();		
	});
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
		var accion = "{{route('reporte.donaciones')}}"			
		jQuery("#frmBuscar").attr('action', accion);
		jQuery('#fecha_inicio').val('');
		jQuery('#fecha_fin').val('');
		jQuery("#frmBuscar").attr('target', '');
		jQuery('#frmBuscar').submit();
	});
});

</script>

@stop
@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Reporte Obras</h1>
	</div>
	<div class="col-lg-12">
	<div style="padding-bottom: 20px; text-align: right;"> <button id="btnPdf" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
	<button id="btnDescargar" class="btn btn-success"><i  class="fa fa-download" aria-hidden="true"></i></button>
	</div>
        {!!Form::open(['method'=>'POST','class'=>'navbar-form navbar-left pull-right','role'=>'search','id'=>'frmBuscar'])!!}
        <div id="form-group"  >
          {!!Form::select('estado', array('0' => 'Todos', '1' => 'Disponibles', '2' => 'Prestados'), $estado)!!}
          {!!Form::hidden('tipo',0,['id'=>'tipo'])!!}   
          {!!Form::submit('Buscar',['class'=>'btn btn-primary','id'=>'btnBuscar'])!!}
        </div>
        {!!Form::close()!!}

        <p>Total {{$obras->total()}} Registros</p>
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th>ISBN </th>
            <th>Título </th>
            <th>Autor</th>
            <th>Tipo</th>
            <th>Area</th>   
            <th>Estado</th>          
          </tr>
        </thead>
        <tbody>

         @foreach ($obras as $item)
         <tr>
           <td>{{ $item->codigo_isbn }}</td>
           <td>{{ $item->isbnObras->titulo }}</td>
           <td>{{ $item->isbnObras->autor }}</td>
           <td>{{ $item->isbnObras->ListaRelacionadaTipoObras->nombre_tipos_obras }}</td>
           <td>{{ $item->isbnObras->ListaRelacionadaArea->nombre_area }}</td>
           <td> @if($item->estado_obras_id == 1)
           			Disponible
           		@else
           			Prestada
           		@endif
           </td>
         </tr>
         @endforeach
       </tbody>
     </table>
{!!$obras->render()!!}

   </div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#btnBuscar').click(function(){
		var accion = "{{route('reporte.obras')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '');
			$("#frmBuscar").submit();		
	});

	$('#btnPdf').click(function(){
		var accion = "{{route('reporte.obrasExportar')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '_blank');
			$("#tipo").val(1);
			$("#frmBuscar").submit();		
	});

	$('#btnDescargar').click(function(){
		var accion = "{{route('reporte.obrasExportar')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#tipo").val(2);
			$("#frmBuscar").submit();		
	});
	
});

</script>

@stop
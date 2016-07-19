@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Reporte Tipos Obras</h1>
	</div>
	<div class="col-lg-12">
	<div style="padding-bottom: 20px; text-align: right;"> <button id="btnPdf" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
	<button id="btnDescargar" class="btn btn-success"><i  class="fa fa-download" aria-hidden="true"></i></button>
	</div>
	{!!Form::open(['method'=>'POST','class'=>'navbar-form navbar-left pull-right','role'=>'search','id'=>'frmBuscar'])!!}               
       {!!Form::hidden('tipo',0,['id'=>'tipo'])!!}               
    {!!Form::close()!!}
                <p>Total {{count($resultados)}} Registros</p>
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th style="text-align: center;">Tipo Obra </th>
            <th style="text-align: center;">Donados </th>
            <th style="text-align: center;">Prestados</th>
            <th style="text-align: center;">Disponible</th>
            <th style="text-align: center;">Total</th>            
          </tr>
        </thead>
        <tbody>
		
         @foreach ($resultados as $item)
         <tr>
           <td>{{ $item['nombre'] }}</td>
           <td style="text-align: center;">{{ (array_key_exists(3,$item))?$item[3]:0 }}</td>
           <td style="text-align: center;">{{ (array_key_exists(2,$item))?$item[2]:0 }}</td>
           <td style="text-align: center;">{{ (array_key_exists(1,$item))?$item[1]:0 }}</td>
           <td style="text-align: center;">{{ $item['total'] }}</td>           
         </tr>
         @endforeach
       </tbody>
     </table>


   </div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	
		$('#btnPdf').click(function(){
		var accion = "{{route('reporte.tiposObrasExportar')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '_blank');
			$("#tipo").val(1);
			$("#frmBuscar").submit();		
	});

	$('#btnDescargar').click(function(){
		var accion = "{{route('reporte.tiposObrasExportar')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#tipo").val(2);
			$("#frmBuscar").submit();		
	});
	
});

</script>

@stop
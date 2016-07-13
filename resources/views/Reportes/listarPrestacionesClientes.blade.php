@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Reporte Clientes</h1>
	</div>
	<div class="col-lg-12">
<div style="padding-bottom: 20px; text-align: right;"> <button id="btnPdf" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
	<button id="btnDescargar" class="btn btn-success"><i  class="fa fa-download" aria-hidden="true"></i></button>
	</div>

        {!!Form::open(['method'=>'POST','class'=>'navbar-form navbar-left pull-right','role'=>'search','id' => 'frmBuscar'])!!}
        <div id="form-group"  >
          {!!Form::text('cedula',$cedula,['class'=>'form-control','placeholder'=>'---Ingrese cedula---'])!!}
          {!!Form::hidden('tipo',0,['id'=>'tipo'])!!}  
          {!!Form::submit('Buscar',['class'=>'btn btn-primary','id' => 'btnBuscar'])!!}
        </div>
        {!!Form::close()!!}

        <p>Total {{$Clientesobj->total()}} Registros</p>
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           <th>Cédula</th>
            <th>Nombres </th>
            <th>Dirección</th>            
            <th>Teléfonos</th>
            <th>Email</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

         @foreach ($Clientesobj as $clientes)
         <tr>
         	<td>{{ $clientes->cedula_cliente }}</td>
           <td>{{ $clientes->nombre_cliente }} {{ $clientes->apellido_cliente }}</td>           
           <td>{{ $clientes->direccion_cliente }}</td>
           <td>{{ $clientes->telefono_cliente }} - {{ $clientes->celular_cliente }}</td>
           <td>{{ $clientes->email_cliente }}</td>
            <td style="text-align: center;"><a href="{{route('reporte.detalleCliente',$clientes->id)}}" class="btn btn-warning" title="Detalles" > <i class="fa fa-list" aria-hidden="true"></i></a></td>           
         </tr>
         @endforeach
       </tbody>
     </table>
{!!$Clientesobj->render()!!}

   </div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#btnBuscar').click(function(){
		var accion = "{{route('reporte.clientes')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '');
			$("#frmBuscar").submit();		
	});

	$('#btnPdf').click(function(){
		var accion = "{{route('reporte.exportarClientes')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#frmBuscar").attr('target', '_blank');
			$("#tipo").val(1);
			$("#frmBuscar").submit();		
	});

	$('#btnDescargar').click(function(){
		var accion = "{{route('reporte.exportarClientes')}}"			
			$("#frmBuscar").attr('action', accion);
			$("#tipo").val(2);
			$("#frmBuscar").submit();		
	});
	
});

</script>

@stop
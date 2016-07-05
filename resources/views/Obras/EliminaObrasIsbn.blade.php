
 @extends ('layout.templateAdministacion')
 @section('content')

{!!Form::open()!!}

<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">ISBNs de {{ $Obrasobj->titulo }}</h1>
	</div>
	<div class="col-lg-12">

	<p> Total {{$Isbnobj->total()}} Registros</p>  
					
				<table class="table table-striped table-bordered table-hover">
					<thead  >
						<tr>
							<th >ISBN</th>
							<th >Disponibilidad</th>
							<th >Estado</th>
							<th style="text-align: center; width: 20%">Acción</th>
						</tr>

					</thead>
					<tbody>

						@foreach ($Isbnobj as $isbn)
						<tr  >
							<td>
									{{$isbn->codigo_isbn}}
								
							</td>
							<td>{{ $isbn->ListaRelacionadaEstadoObra->nombre_estado_historial }}</td>
							<td>{{ $isbn->activo_pasivo }}</td>
							<td style="text-align: center;">
							{!!Form::hidden('bandera',2)!!}
<a href="{{route('isbn.edit',$isbn->id)}}" data-toggle="modal" data-target="#IsbnModal" class="btn btn-warning" ><i class="fa fa-pencil-square-o"></i></a> 
			             </td> 
						</tr>
						@endforeach
					</tbody>
				</table>
				{!!$Isbnobj->render()!!}
				<a href="{{route('obrasRegistros.create')}}" class="btn btn-info">Regresar</a>
			</div>
		</div>

 <!-- Inicio Modal Crear Registro -->
 <div class="modal fade" id="IsbnModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:215px">
    <div class="modal-content" >
       </div>
  </div>
</div>
 <!-- Fin Modal Crear Registro -->


<!--Inicio Eliminar Isbn -->
 <script>
function eliminar(id){
  if (confirm("¿ Está seguro de que desea Eliminar ?")) {
    var form1 = document.getElementById("form" + id);    
    form1.submit();
  }
}
</script>
 <!-- Fin Eliminar Isbn-->
   
{!!Form::close()!!}

@stop

 @extends ('layout.templateAdministacion')
 @section('content')

{!!Form::open()!!}

<div class="row">
	<div class= "col-md-11 ">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="text-center"class="bg-info" id="myModalLabel"> OBRA.-  {{ $Obrasobj->titulo }}</h4>
			</div>
			<div class="panel-body">
				<p style="text-align: center">ISBN</p>
				<div class="checkbox" style="text-align: center">
					<label>
						<p> {{$Isbnobj->total()}} Registros</p>  
					</label>
				</div>

				<table class="table table-striped">
					<thead  >
						<tr class="bg-info" >
							<th >ISBN</th>
							<th >Disponibilidad</th>
							<th >Estado</th>
							<th >Modificar</th>
						</tr>

					</thead>
					<tbody>

						@foreach ($Isbnobj as $isbn)
						<tr  >
							<td>
								<div class="checkbox" HEIGHT="50">
									<label>
										<input type="checkbox" value="{{$isbn->id}}">
										{{$isbn->codigo_isbn}}
									</label>
								</div>
							</td>
							<td>{{ $isbn->ListaRelacionadaEstadoObra->nombre_estado_historial }}</td>
							<td>{{ $isbn->activo_pasivo }}</td>
							<td>
							{!!Form::hidden('bandera',2)!!}
<a href="{{route('isbn.edit',$isbn->id)}}" data-toggle="modal" data-target="#IsbnModal" class="btn btn-info" ><i class="fa fa-pencil-square-o"></i></a> 
			             </td> 
						</tr>
						@endforeach
					</tbody>
				</table>
				{!!$Isbnobj->render()!!}
				<div class="modal-footer">
					<table class="table ">
						<tbody>
							<tr>
								<td style="text-align: center">
								<a href="{{route('obrasRegistros.create')}}" class="btn btn-primary" >Volver</a>
								</td>
							</tr>
						</tbody>
					</table>		
				</div>
			</div>
		</div>
	</div>
</div>
</div>
 <!-- Inicio Modal Crear Registro -->
 <div class="modal fade" id="IsbnModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="height: 250px; width:215px">
    <div class="modal-content" style="height: 250px; width:215px">
    



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
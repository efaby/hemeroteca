@extends ('layout.templateAdministacion')

@section('content')
<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Areas</h1>
	</div>
	<div class="col-lg-12">
<p>
  <a href="{{route('area.create')}}" data-toggle="modal" data-target="#crearArea" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</p>
<p>Total {{$areasobj->total()}} Registros</p>
<table class="table table-striped table-bordered table-hover" >
     <thead>
     <tr >
      	<th>Nombre </th>
         <th>Descripción</th>
         <th>Estado</th>
         <th style="text-align: center; width: 20%">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($areasobj as $area)
         <tr>
             <td>{{ $area->nombre_area }}</td>
             <td>{{ $area->descripcion_area }}</td>
             <td>{{ $area->activo_pasivo }}</td>
             <td  style="text-align: center;"><a href="{{route('area.show',$area->id)}}" data-toggle="modal" data-target="#mostrarArea" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a>
             <a href="{{route('area.edit',$area->id)}}" data-toggle="modal" data-target="#editarArea" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>
                     
         </tr>
     @endforeach
     </tbody>
 </table>
</div>
</div>
 <!-- Modal Crear Area -->
<div class="modal fade" id="crearArea" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Area -->


 <!-- Modal Leer Area -->
<div class="modal fade" id="mostrarArea" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer Area -->

 <!-- Modal Editar Area -->
<div class="modal fade" id="editarArea" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer Area -->

<!--Inicio Eliminar tipo Area -->
 <script>
function eliminar(id){
  if (confirm("¿ Está seguro de que desea Eliminar ?")) {
    var form1 = document.getElementById("form" + id);    
    form1.submit();
  }
}
</script>
 <!-- Fin Eliminar Tipo Area -->



{!!$areasobj->render()!!}

@stop
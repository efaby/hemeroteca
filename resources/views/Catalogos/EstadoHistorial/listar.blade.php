@extends ('layout.templateAdministacion')

@section('content')

 
 <table class="table table-striped">
     <thead>
     <tr class="bg-info" style="background-color:#d3d3d3">
      	<th>Nombre </th>
         <th>Descripción</th>
         <th>Estado</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($EstadoHistorialobj as $estado)
         <tr>
             <td>{{ $estado->nombre_estado_historial }}</td>
             <td>{{ $estado->descripcion_estado_historial }}</td>
               <td>{{ $estado->activo_pasivo}}</td>
             <td><a href="{{route('estado.show',$estado->id)}}" data-toggle="modal" data-target="#mostrarestado" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
             <td><a href="{{route('estado.edit',$estado->id)}}" data-toggle="modal" data-target="#editarestado" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td> 
              
         </tr>
     @endforeach
     </tbody>
 </table>
</br>
</br>
<div style="text-align:center">
<a href="{{route('estado.create')}}" data-toggle="modal" data-target="#crearestado" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</div>

 <!-- Modal Crear obra -->
<div class="modal fade" id="crearestado" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear obra -->


 <!-- Modal Leer Obra -->
<div class="modal fade" id="mostrarestado" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer obra -->

 <!-- Modal Editar obra -->
<div class="modal fade" id="editarestado" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer obra -->


<!--Inicio Eliminar estado -->
 <script>
function eliminar(id){
  if (confirm("¿ Está seguro de que desea Eliminar ?")) {
    var form1 = document.getElementById("form" + id);    
    form1.submit();
  }
}
</script>
 <!-- Fin Eliminar  estado -->



{!!$EstadoHistorialobj->render()!!}

@stop
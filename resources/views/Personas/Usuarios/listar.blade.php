@extends ('layout.templateAdministacion')

@section('content')


<table class="table table-striped" >
 <thead >
   <tr class="bg-info" style="background-color:#d3d3d3">
     <th>Nombres </th>
     <th>Apellidos</th>
     <th>Cédula</th>
     <th>Estado</th>
     <th colspan="3">Acciones</th>
   </tr>
 </thead>
 <tbody>

   @foreach ($Usuariosobj as $Usuarios)
   <tr>
     <td>{{ $Usuarios->nombre }}</td>
     <td>{{ $Usuarios->Apellido }}</td>
     <td>{{ $Usuarios->cedula }}</td>
     <td>{{ $Usuarios->activo_pasivo }}</td>
     <td><a href="{{route('usuario.show',$Usuarios->id)}}" data-toggle="modal" data-target="#mostrarUsuarios" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
     <td><a href="{{route('usuario.edit',$Usuarios->id)}}" data-toggle="modal" data-target="#editarUsuarios" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>          
   </tr>
   @endforeach
 </tbody>
</table>
</br>
</br>
<div style="text-align:center">
  <a href="{{route('usuario.create')}}" data-toggle="modal" data-target="#crearUsuarios" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</div>

<!-- Modal Crear Usuario -->
<div class="modal fade" id="crearUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Crear Usuario -->


<!-- Modal Leer Usuario -->
<div class="modal fade" id="mostrarUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Usuario -->

<!-- Modal Editar Usuario -->
<div class="modal fade" id="editarUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Usuario -->

<!--Inicio Eliminar tipo Usuario -->
<script>
  function eliminar(id){
    if (confirm("¿ Está seguro de que desea Eliminar ?")) {
      var form1 = document.getElementById("form" + id);    
      form1.submit();
    }
  }
</script>
<!-- Fin Eliminar Tipo Usuario -->



{!!$Usuariosobj->render()!!}

@stop
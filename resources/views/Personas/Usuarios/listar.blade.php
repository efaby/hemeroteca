@extends ('layout.templateAdministacion')

@section('content')
<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Usuarios</h1>
	</div>
	<div class="col-lg-12">
<p>
  <a href="{{route('usuario.create')}}" data-toggle="modal" data-target="#crearUsuarios" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</p>
<p>Total {{$Usuariosobj->total()}} Registros</p>
<table class="table table-striped table-bordered table-hover" >
 <thead >
   <tr>
     <th>Nombres </th>
     <th>Apellidos</th>
     <th>Cédula</th>
     <th>Estado</th>
     <th style="text-align: center; width: 20%">Acciones</th>
   </tr>
 </thead>
 <tbody>

   @foreach ($Usuariosobj as $Usuarios)
   <tr>
     <td>{{ $Usuarios->nombre }}</td>
     <td>{{ $Usuarios->Apellido }}</td>
     <td>{{ $Usuarios->cedula }}</td>
     <td>{{ $Usuarios->activo_pasivo }}</td>
     <td style="text-align: center;"><a href="{{route('usuario.show',$Usuarios->id)}}" data-toggle="modal" data-target="#mostrarUsuarios" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a>
    <a href="{{route('usuario.edit',$Usuarios->id)}}" data-toggle="modal" data-target="#editarUsuarios" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>          
   </tr>
   @endforeach
 </tbody>
</table>
</div>
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
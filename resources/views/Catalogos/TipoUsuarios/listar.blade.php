@extends ('layout.templateAdministacion')

@section('content')
<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Tipos de Usuario</h1>
	</div>
	<div class="col-lg-12">
<p>
  <a href="{{route('tipoUsuario.create')}}" data-toggle="modal" data-target="#crearTipoUsuarios" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</p>
<p>Total {{$tipoUsuarioobj->total()}} Registros</p>
<table class="table table-striped table-bordered table-hover" >
     <thead >
     <tr>
      	<th>Nombre </th>
         <th>Descripción</th>
         <th style="text-align: center; width: 20%">Acciones</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($tipoUsuarioobj as $tipoUsuario)
         <tr>
             <td>{{ $tipoUsuario->nombre }}</td>
             <td>{{ $tipoUsuario->descripcion }}</td>
             <td style="text-align: center;"><a href="{{route('tipoUsuario.show',$tipoUsuario->id)}}" data-toggle="modal" data-target="#mostrarTipoUsuarios" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a>
             <a href="{{route('tipoUsuario.edit',$tipoUsuario->id)}}" data-toggle="modal" data-target="#editarTipoUsuarios" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>
                      
         </tr>
     @endforeach
     </tbody>
 </table>
 {!!$tipoUsuarioobj->render()!!}
</div>
</div>
 
<!-- Modal Crear Usuario -->
<div class="modal fade" id="crearTipoUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Usuario -->



 <!-- Modal Leer Usuario -->
<div class="modal fade" id="mostrarTipoUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer Usuario -->

 <!-- Modal Editar Usuario -->
<div class="modal fade" id="editarTipoUsuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer Usuario -->



@stop
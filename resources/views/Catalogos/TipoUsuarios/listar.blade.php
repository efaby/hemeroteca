@extends ('layout.templateAdministacion')

@section('content')

 
 <table class="table table-striped" >
     <thead >
     <tr class="bg-info" style="background-color:#d3d3d3">
      	<th>Nombre </th>
         <th>Descripción</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($tipoUsuarioobj as $tipoUsuario)
         <tr>
             <td>{{ $tipoUsuario->nombre }}</td>
             <td>{{ $tipoUsuario->descripcion }}</td>
             <td><a href="{{route('tipoUsuario.show',$tipoUsuario->id)}}" data-toggle="modal" data-target="#mostrarTipoUsuarios" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
             <td><a href="{{route('tipoUsuario.edit',$tipoUsuario->id)}}" data-toggle="modal" data-target="#editarTipoUsuarios" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>
                      
         </tr>
     @endforeach
     </tbody>
 </table>
</br>
</br>
<div style="text-align:center">
<a href="{{route('tipoUsuario.create')}}" data-toggle="modal" data-target="#crearTipoUsuarios" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
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

{!!$tipoUsuarioobj->render()!!}

@stop
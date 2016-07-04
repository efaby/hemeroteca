@extends ('layout.templateAdministacion')

@section('content')


<table class="table table-striped" >
 <thead >
   <tr class="bg-info" style="background-color:#d3d3d3">
   <th>Nombres/Institución </th>
     <th>Cédula/Ruc</th>
     <th>Estado</th>
     <th colspan="3">Acciones</th>
   </tr>
 </thead>
 <tbody>

   @foreach ($Proveedoresobj as $proveedor)
   <tr>
     <td>{{ $proveedor->nombre_proveedor }}</td>
     <td>{{ $proveedor->cedula_proveedor }}</td>
     <td>{{ $proveedor->activo_pasivo }}</td>
     <td><a href="{{route('proveedor.show',$proveedor->id)}}" data-toggle="modal" data-target="#mostrarproveedor" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
     <td><a href="{{route('proveedor.edit',$proveedor->id)}}" data-toggle="modal" data-target="#editarproeveedor" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>            
   </tr>
   @endforeach
 </tbody>
</table>
</br>
</br>
<div style="text-align:center">
  <a href="{{route('proveedor.create')}}" data-toggle="modal" data-target="#crearproveedor" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</div>

<!-- Modal Crear Proveedores -->
<div class="modal fade" id="crearproveedor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Crear Proveedores -->


<!-- Modal Leer Proveedores -->
<div class="modal fade" id="mostrarproveedor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Proveedores -->

<!-- Modal Editar Proveedores -->
<div class="modal fade" id="editarproeveedor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Proveedores -->

{!!$Proveedoresobj->render()!!}

@stop
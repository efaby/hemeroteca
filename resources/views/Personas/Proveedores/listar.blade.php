@extends ('layout.templateAdministacion')

@section('content')
<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">Proveedores</h1>
	</div>
	<div class="col-lg-12">
<p>
  <a href="{{route('proveedor.create')}}" data-toggle="modal" data-target="#crearproveedor" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</p>
<p>Total {{$Proveedoresobj->total()}} Registros</p>
<table class="table table-striped table-bordered table-hover" >
 <thead >
   <tr>
   <th>Nombres/Institución </th>
     <th>Cédula/Ruc</th>
     <th>Estado</th>
     <th style="text-align: center; width: 20%">Acciones</th>
   </tr>
 </thead>
 <tbody>
   @foreach ($Proveedoresobj as $proveedor)
   <tr>
     <td>{{ $proveedor->nombre_proveedor }}</td>
     <td>{{ $proveedor->cedula_proveedor }}</td>
     <td>{{ $proveedor->activo_pasivo }}</td>
     <td  style="text-align: center;"><a href="{{route('proveedor.show',$proveedor->id)}}" data-toggle="modal" data-target="#mostrarproveedor" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a>
     <a href="{{route('proveedor.edit',$proveedor->id)}}" data-toggle="modal" data-target="#editarproeveedor" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>            
   </tr>
   @endforeach
 </tbody>
</table>
</div>
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
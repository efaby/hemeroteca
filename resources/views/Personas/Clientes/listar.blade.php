@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  <div class= "col-md-11 ">
    <div class="panel panel-default">
    <div class="panel-heading">Clientes</div>
      <div class="panel-body">

        {!!Form::open(['route'=>['cliente.index'],'method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
        <div id="form-group"  >
          {!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'---Ingrese cedula---'])!!}
          {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
        </div>
        {!!Form::close()!!}
        <p>
           <a href="{{route('cliente.create')}}" data-toggle="modal" data-target="#crearclientes" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
         
        </p>
        <p>Total {{$Clientesobj->total()}} Registros</p>
        <table class="table table-striped">
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

         @foreach ($Clientesobj as $clientes)
         <tr>
           <td>{{ $clientes->nombre_cliente }}</td>
           <td>{{ $clientes->apellido_cliente }}</td>
           <td>{{ $clientes->cedula_cliente }}</td>
           <td>{{ $clientes->activo_pasivo }}</td>
           <td><a href="{{route('cliente.show',$clientes->id)}}" data-toggle="modal" data-target="#mostrarclientes" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
           <td><a href="{{route('cliente.edit',$clientes->id)}}" data-toggle="modal" data-target="#editarclientes" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td>           
         </tr>
         @endforeach
       </tbody>
     </table>


   </div>
 </div>
</div>
{!!$Clientesobj->render()!!}
</div>


<!-- Modal Crear Usuario -->
<div class="modal fade" id="crearclientes" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Crear Usuario -->


<!-- Modal Leer Usuario -->
<div class="modal fade" id="mostrarclientes" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Usuario -->

<!-- Modal Editar Usuario -->
<div class="modal fade" id="editarclientes" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- Fin Modal Leer Usuario -->

{!!$Clientesobj->render()!!}

@stop
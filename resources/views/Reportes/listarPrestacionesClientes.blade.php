@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  <div class= "col-md-11 ">
    <div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;">Clientes</div>
      <div class="panel-body">

        {!!Form::open(['route'=>['reportes.index'],'method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
        <div id="form-group"  >
          {!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'---Ingrese cedula---'])!!}
          {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
        </div>
        {!!Form::close()!!}

        <p>Total {{$Clientesobj->total()}} Registros</p>
        <table class="table table-striped">
         <thead >
           <tr class="bg-info" style="background-color:#d3d3d3">
            <th>Nombres </th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>

         @foreach ($Clientesobj as $clientes)
         <tr>
           <td>{{ $clientes->nombre_cliente }}</td>
           <td>{{ $clientes->apellido_cliente }}</td>
           <td>{{ $clientes->cedula_cliente }}</td>
            <td><a href="vistaPdfClientes/{{ $clientes->id }}" class="btn btn-info" > <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
            <td><a href="descargaPdfClientes/{{ $clientes->id }}" class="btn btn-success"> <i  class="fa fa-download" aria-hidden="true"></i></a></td>        
         </tr>
         @endforeach
       </tbody>
     </table>


   </div>
 </div>
</div>
{!!$Clientesobj->render()!!}
</div>

@stop
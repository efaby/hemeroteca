@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  <div class= "col-md-11 ">
    <div class="panel panel-default">
    <div class="panel-heading" style="text-align:center;">Reportes de Prestaciones</div>
    <div class="panel-body">

    {!!Form::open(['route'=>['reservaciones.create'],'method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
     <div id="form-group"  >
      {!!Form::text('fecha',null,['class'=>'form-control','placeholder'=>'---Ingrese Fecha---'])!!}
       {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}

   
       <table class="table table-striped">
     <thead >
     <tr class="bg-info" style="background-color:#d3d3d3">
         <th>Fecha Prestamo</th>
         <th>Cliente CI/RUC</th>
         <th>Titulo</th>
         <th>Codigo Obra</th>

         <th colspan="2">Accion</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($Prestacionesobj as $prestacion)
         <tr>

             <td>{{ $prestacion->fecha_reservacion }}</td>
             <td>{{ $prestacion->ListaRelacionadaCliente->cedula_cliente }}</td>
             <td>{{ $prestacion->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</td>
             <td>{{ $prestacion->RelacionDonacionesHistorialIsbn->codigo_isbn }}</td> 
             <td><a href="{{route('reservaciones.show',$prestacion->id)}}" class="btn btn-info" > <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
              <td><a href="{{route('reservaciones.edit',$prestacion->id)}}" class="btn btn-success"> <i  class="fa fa-download" aria-hidden="true"></i></a></td>
         </tr>
     @endforeach
     </tbody>
 </table>


    </div>
  </div>
</div>
{!!$Prestacionesobj->render()!!}
</div>


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





@stop
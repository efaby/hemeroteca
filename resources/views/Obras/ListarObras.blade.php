@extends ('layout.templateAdministacion')

@section('content')


<div class="row">
  <div class= "col-md-11 ">
    <div class="panel panel-default">
    <div class="panel-heading">Obras</div>
    <div class="panel-body">

    {!!Form::open(['route'=>['obrasRegistros.create'],'method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
     <div id="form-group"  >
      {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'---Ingrese Titulo---'])!!}
       {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
      <p>
      <a href="{{route('obrasRegistros.index')}}" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nueva Obra</a>
      </p>
    <p>Total {{$ObrasObj->total()}} Registros</p>
       <table class="table table-striped">
     <thead >
     <tr class="bg-info" style="background-color:#d3d3d3">
        <th>Titulo</th>
         <th>Autor</th>
         <th>Tipo Obra</th>
         <th>Area</th>

         <th colspan="3">Accion</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($ObrasObj as $obras)
         <tr>

             <td>{{ $obras->titulo }}</td>
             <td>{{ $obras->autor }}</td>
             <td>{{ $obras->ListaRelacionadaTipoObras->nombre_tipos_obras }}</td>
             <td>{{ $obras->ListaRelacionadaArea->nombre_area }}</td> 
             <td><a href="{{route('obrasRegistros.show',$obras->id)}}" class="btn btn-info" > <i class="fa fa-book"></i></a></td>
             <td>
              {!!Form::hidden('bandera',2)!!}
             <a href="{{route('obrasRegistros.edit',$obras->id)}}" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i></a>
             </td> 
              <td><a href="{{route('isbn.show',$obras->id)}}"class="btn btn-primary" > <i class="fa fa-pencil"></i> Isbn</a></td>

         </tr>
     @endforeach
     </tbody>
 </table>


    </div>
  </div>
</div>
{!!$ObrasObj->render()!!}
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
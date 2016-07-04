@extends ('layout.templateAdministacion')

@section('content')

 
 <table class="table table-striped" >
     <thead >
     <tr class="bg-info" style="background-color:#d3d3d3">
      	<th>Nombre </th>
         <th>Descripción</th>
         <th>Estado</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>

     @foreach ($TipoRegistroobj as $registro)
         <tr>
             <td>{{ $registro->nombre_registro }}</td>
             <td>{{ $registro->descripcion_registro }}</td>
             <td>{{ $registro->activo_pasivo }}</td>
             <td><a href="{{route('tipoRegistro.show',$registro->id)}}" data-toggle="modal" data-target="#mostrarTipoRegistro" class="btn btn-info" ><i class="fa fa-book"></i> Leer</a></td>
             <td><a href="{{route('tipoRegistro.edit',$registro->id)}}" data-toggle="modal" data-target="#editarTipoRegistro" class="btn btn-warning" > <i class="fa fa-pencil-square-o"></i> Editar</a></td> 
                        
         </tr>
     @endforeach
     </tbody>
 </table>
</br>
</br>
<div style="text-align:center">
<a href="{{route('tipoRegistro.create')}}" data-toggle="modal" data-target="#crearTipoRegistro" class="btn btn-primary" ><i class="fa fa-file-text-o"></i> Nuevo Registro</a>
</div>

 <!-- Modal Crear Usuario -->
<div class="modal fade" id="crearTipoRegistro" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Usuario -->


 <!-- Modal Leer Usuario -->
<div class="modal fade" id="mostrarTipoRegistro" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Leer Usuario -->

 <!-- Modal Editar Usuario -->
<div class="modal fade" id="editarTipoRegistro" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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




{!!$TipoRegistroobj->render()!!}

@stop
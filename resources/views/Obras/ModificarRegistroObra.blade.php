 @extends ('layout.templateAdministacion')
 @section('content')
 
{!!Form::model($Obrasobj,['route'=>['obrasRegistros.update',$Obrasobj->id],'method'=>'PUT','id' => 'frmEditar'])!!}

    @include('Obras.form.formRegistroObra')

 {!!Form::submit('Guardar Datos',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

 {!! Form::open()!!}

<br><br>
<table class="table">
  <thead>
     <tr>
      	<th colspan="3">Registro de los ISBN</th>

     </tr>
     </thead>
     <tbody>
	<tr><td>
	<p>
	<a href="{{route('isbn.create')}}" data-toggle="modal" data-target="#IsbnModal" class="btn btn-warning" ><i class="fa fa-plus"></i>Nuevo</a> 
	</p>                 
               <table class="table table-striped table-bordered table-hover" >
                 <thead >
                   <tr>
                    <th width="100">Codigo</th>
                    <th width="100">Estado </th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($Isbnobj as $obj)
                      <tr>
                       <td tyle="text-align: center">{{ $obj->codigo_isbn }}</td>
                       <td tyle="text-align: center">{{ $obj->activo_pasivo }}</td>  
                     </tr>
                     @endforeach
               </tbody>
             </table>
</td>
</tr>
</tbody>
</table>
  <a href="{{route('obrasRegistros.create')}}" class="btn btn-info">Regresar</a>		
<!-- Modal Crear Registro -->
<div class="modal fade" id="IsbnModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:215px">
    <div class="modal-content" style="width:215px">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Registro -->


{!!Form::close()!!}
@stop
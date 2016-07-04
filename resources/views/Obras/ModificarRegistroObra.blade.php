 @extends ('layout.templateAdministacion')
 @section('content')
 
{!!Form::model($Obrasobj,['route'=>['obrasRegistros.update',$Obrasobj->id],'method'=>'PUT','id' => 'frmEditar'])!!}

    @include('Obras.form.formRegistroObra')

 {!!Form::submit('Guardar Datos',['class'=>'btn btn-primary'])!!}

{!!Form::close()!!}

 {!! Form::open()!!}
 <p></p>
 <p></p>
<div class="form-group">
           <div class="table">
              <div class="bg-info" style="background-color:#d3d3d3">
                   <p>Registro de los ISBN</p>
              </div>
           </div>
  </div>

       <div class="form-group">
           <div class="row">
            <div class="col-md-6">
               
             <div class="row" >
                 <div class="col-md-6" tyle="text-align: left;"> 
                <a href="{{route('isbn.create')}}" data-toggle="modal" data-target="#IsbnModal" class="btn btn-warning" ><i class="fa fa-plus"></i>Nuevo</a> 
              </div>
              </div >  
             </div>
              <div class="col-md-4"> 
                 
               <table class="table table-condensed" >
                 <thead >
                   <tr class="bg-info" >
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
               </div>     
            </div>
      </div>
		<div class="modal-footer">
		<table class="table ">
     		<tbody>
                <tr>
                    <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>

                    <td >
                        @if(count($Isbnobj)>=1)
                         <a href="{{route('obrasRegistros.create')}}" class="btn btn-primary" >Cerrar</a>
                         @else
                         <a href="#" class="btn btn-danger" disabled></i>Cerrar</a>
                         @endif

                    </td>
                </tr>
            </tbody>
      	</table>
   		 </div>
<!-- Modal Crear Registro -->
<div class="modal fade" id="IsbnModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="height: 250px; width:215px">
    <div class="modal-content" style="height: 250px; width:215px">
    



    </div>
  </div>
</div>
 <!-- Fin Modal Crear Registro -->


{!!Form::close()!!}
@stop
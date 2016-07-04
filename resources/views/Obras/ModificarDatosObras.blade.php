@extends ('layout.templateAdministacion')
 @section('content')
 
{!!Form::model($Obrasobj,['route'=>['obrasRegistros.update',$Obrasobj->id],'method'=>'PUT','id' => 'frmEditar'])!!}

    @include('Obras.form.formRegistroObra')

{!!Form::hidden('bandera',1)!!}
 {!!Form::submit('Guardar Datos',['class'=>'btn btn-primary'])!!}

{!!Form::close()!!}


@stop
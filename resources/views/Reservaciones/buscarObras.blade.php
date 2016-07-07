 @extends ('layout.templateAdministacion')
 @section('content')

<div class="row">
  	<div class="col-lg-12">
		<h1 class="page-header">{{$titulo}} de Obras</h1>
	</div>
	<div class="col-lg-12">
	
	@if ($mensaje != '')
		<div class="alert alert-success fade in alert-dismissable">
				<button type="button" class="close" data-dismiss="alert"
					aria-hidden="true">&times;</button>
								  {{ $mensaje }}
								</div>
	@endif
	
	{!!Form::open(['route'=>['reservaciones.buscarObra',$opcion],'method'=>'POST','role'=>'search']) !!}
      <table class="table">
        <tr>            
            <td> 
            	{!!Form::text('texto_buscar',$textoBuscar,['class'=>'form-control','placeholder'=>'Titulo - Autor - ISBN'])!!}
            	<table style="margin-top: 5px; width: 40%;">
            	<tr>
            		<td>{!!Form::checkbox('filtro[]', 'titulo', in_array('titulo', $filtros))!!} {!!Form::label('filtro', 'Título')!!}</td>
            		<td>{!!Form::checkbox('filtro[]', 'autor', in_array('autor', $filtros))!!} {!!Form::label('filtro', 'Autor')!!}</td>
            		<td>{!!Form::checkbox('filtro[]', 'isbn', in_array('isbn', $filtros))!!} {!!Form::label('filtro', 'ISBN')!!}</td>
            		<td>{!!Form::checkbox('filtro[]', 'area', in_array('area', $filtros))!!} {!!Form::label('filtro', 'Area')!!}</td>
            	</tr>
            	</table>       		
            </td>
            <td> {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}</td>
        </tr>      	
	</table>
	{!!Form::close()!!}
</div>
</div>
@if($resultado)
<div class="row">
  	<div class="col-lg-12">
  	<p>Total {{count($listadoObras)}} Registros</p>
  	<table class="table">
  		 @foreach ($listadoObras as $item)
         <tr>
           <td>
           	<span class="rowListado"><span class="labelListado">Título:</span>
	           	@if($opcion == 'buscar')
	           		<a href="{{route('reservaciones.verObra',$item->id)}}" data-toggle="modal" data-target="#mostrarObra" >{{ $item->titulo }}</a>
	           	@else
	           		{{ $item->titulo }}
	           	@endif
           	</span>
           	<span class="rowListado"><span class="labelListado">Autor:</span>{{ $item->autor }}</span>
           	<span class="rowListado"><span class="labelListado">Area:</span>{{ $item->ListaRelacionadaArea->nombre_area }}</span>
           	<span class="rowListado"><span class="labelListado">Editorial:</span>{{ $item->editorial }}</span>           	
           	<span class="rowListado"><span class="labelListado">Disponibilidad:</span>
           		@if(count($item->isbns)>0)
	           		@foreach ($item->isbns as $isbn)
	           			@if($opcion == 'buscar')
	           				{{$isbn->codigo_isbn}}&nbsp
	           			@else
	           				<a href="{{route('reservaciones.'.$opcion, $isbn->id)}}" >{{$isbn->codigo_isbn}}</a>&nbsp
	           			@endif
	           		@endforeach
           		@else 
           			<span class="noDisponible">No disponible</span>
           		@endif
           	</span>
           </td>          
         </tr>
         @endforeach
  	</table>
  	</div>
</div>
@endif
  <div class="modal fade" id="mostrarObra" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div> 
@stop
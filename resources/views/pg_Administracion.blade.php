@extends ('layout.templateAdministacion')
@section('content')

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$clientes}}</div>
						<div>Clientes!</div>
					</div>
				</div>
			</div>
			<a href="{{route('cliente.index')}}">
				<div class="panel-footer">
					<span class="pull-left">Ver Detalles</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-book fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{ $prestaciones }}</div>
						<div>Obras Prestadas!</div>
					</div>
				</div>
			</div>
			<a href="{{route('reservaciones.buscarObra','prestacion')}}">
				<div class="panel-footer">
					<span class="pull-left">Ver Detalles</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-copy fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$donaciones}}</div>
						<div>Obras Donadas!</div>
					</div>
				</div>
			</div>
			<a href="{{route('reservaciones.buscarObra','donacion')}}">
				<div class="panel-footer">
					<span class="pull-left">Ver Detalles</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-edit fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">{{$devoluciones}}</div>
						<div>Devolver Hoy!</div>
					</div>
				</div>
			</div>
			<a href="{{route('reservaciones.devolucionObra')}}">
				<div class="panel-footer">
					<span class="pull-left">Ver Detalles</span> <span
						class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="row" style="text-align: center;">
<img src="imagenes/administracion.jpg" width="50%" />
</div>

@stop
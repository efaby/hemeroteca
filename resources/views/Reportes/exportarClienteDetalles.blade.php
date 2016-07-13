<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de Obras</title>
    <link rel="stylesheet" href="css/plantilla.css" media="all" />
    
  </head>
  <body >
      <header class="clearfix">
      <div id="logo">
        <img src="{{asset('imagenes/inpc2.png')}}"/>
      </div>      
    </header>
     <main>
	<div id="details" class="clearfix">
        <div id="client">
          <h2 class="name">Reporte de Obras Prestadas / Donadas</h2>
          <div class="date">Fecha Reporte: {{$fecha}}</div>
          <h2 class="name">{{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</h2>
          <div class="address">{{ $cliente->cedula_cliente }}</div>
           <div class="address">{{ $cliente->direccion_cliente }}</div>
            <div class="address">{{ $cliente->telefono_cliente }} - {{ $cliente->celular_cliente }}</div>
            <div class="email"><a href="mailto:{{ $cliente->email_cliente }}">{{ $cliente->email_cliente }}</a></div>
        </div>
        <div id="invoice">
         
        </div>
      </div>
      
        <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th>ISBN </th>
            <th>Título </th>
            <th>Fecha Préstamo</th>
            <th>Fecha Entrega</th>   
            <th>Estado</th>          
          </tr>
        </thead>
        <tbody>

         @foreach ($listado as $item)
         <tr>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->codigo_isbn }}</td>
           <td>{{ $item->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</td>           
           <td>{{ $item->fecha_reservacion }}</td>
           <td>@if($item->prestacion_donacion == "pres")
           			{{ $item->fecha_devolucion }} 
           		@endif           
           </td>
           <td> @if($item->prestacion_donacion == "don")
           			Donada       			
           		@else
           			@if($item->activo == 1)
           			Prestada
           			@else
           			Entregada
           			@endif
           		@endif
           </td>
         </tr>
         @endforeach
       </tbody>
     </table>
     
</main>
    <footer>
      Reporte Del Instituto Nacional Patrimonio Cultural.
    </footer>
  </body>
</html>
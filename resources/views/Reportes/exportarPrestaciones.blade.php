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
          <h2 class="name">Reporte de Prestaciones</h2>
          <div class="date">{{$filtro}}</div>
          <div class="date">Fecha: {{$fecha}}</div>
        </div>
        <div id="invoice">
         
        </div>
      </div>
<table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           	<th>ISBN </th>
            <th>Título </th>
            <th>Cliente</th>
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
           <td>{{ $item->ListaRelacionadaCliente->nombre_cliente }} {{ $item->ListaRelacionadaCliente->apellido_cliente }}</td>
           <td>{{ $item->fecha_reservacion }}</td>
           <td>{{ $item->fecha_devolucion }}</td>
           <td> @if($item->activo == 1)
           			Prestada           			
           		@else
           			Entregada
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
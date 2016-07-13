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
          <h2 class="name">Reporte de Obras {{$titulo}}</h2>
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
            <th>Autor</th>
            <th>Tipo</th>
            <th>Area</th>   
            <th>Estado</th>          
          </tr>
        </thead>
        <tbody>

         @foreach ($obras as $item)
         <tr>
           <td>{{ $item->codigo_isbn }}</td>
           <td>{{ $item->isbnObras->titulo }}</td>
           <td>{{ $item->isbnObras->autor }}</td>
           <td>{{ $item->isbnObras->ListaRelacionadaTipoObras->nombre_tipos_obras }}</td>
           <td>{{ $item->isbnObras->ListaRelacionadaArea->nombre_area }}</td>
           <td> @if($item->estado_obras_id == 1)
           			Disponible
           		@else
           			Prestada
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
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de Tipos de Obras</title>
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
          <h2 class="name">Reporte de Tipos de Obras</h2>
          <div class="date">Fecha Reporte: {{$fecha}}</div>
        </div>
        <div id="invoice">
         
        </div>
      </div>
 <table class="table table-striped table-bordered table-hover">
        <thead >
           <tr>
           	<th style="text-align: center;">Tipo Obra </th>
            <th style="text-align: center;">Donados </th>
            <th style="text-align: center;">Prestados</th>
            <th style="text-align: center;">Disponible</th>
            <th style="text-align: center;">Total</th>            
          </tr>
        </thead>
        <tbody>
		
         @foreach ($resultados as $item)
         <tr>
           <td>{{ $item['nombre'] }}</td>
           <td style="text-align: center;">{{ (array_key_exists(3,$item))?$item[3]:0 }}</td>
           <td style="text-align: center;">{{ (array_key_exists(2,$item))?$item[2]:0 }}</td>
           <td style="text-align: center;">{{ (array_key_exists(1,$item))?$item[1]:0 }}</td>
           <td style="text-align: center;">{{ $item['total'] }}</td>           
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
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de Clientes</title>
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
          <h2 class="name">Reporte de Clientes</h2>
          <div class="date">Fecha: {{$fecha}}</div>
        </div>
        <div id="invoice">
         
        </div>
      </div>
 <table class="table table-striped table-bordered table-hover">
         <thead >
           <tr>
           <th>Cédula</th>
            <th>Nombres </th>
            <th>Dirección</th>            
            <th>Teléfonos</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>

         @foreach ($Clientesobj as $clientes)
         <tr>
         	<td>{{ $clientes->cedula_cliente }}</td>
           <td>{{ $clientes->nombre_cliente }} {{ $clientes->apellido_cliente }}</td>           
           <td>{{ $clientes->direccion_cliente }}</td>
           <td>{{ $clientes->telefono_cliente }} - {{ $clientes->celular_cliente }}</td>
           <td>{{ $clientes->email_cliente }}</td>
           
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
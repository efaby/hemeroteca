<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reportes</title>

    <title> Laravel </title>
    <link rel="stylesheet" href="css/stylo.css" media="all" />
    
  </head>
  <body >
    <header class="clearfix">
      <div id="logo">
         <img src="imagenes/cliente.jpg">
      </div>
      <h1>PRESTACION REPORTE</h1>
      <div id="company" class="clearfix">
        <div>Instituto INPC</div>
        <div>Regional 3<br /> 000000</div>
        <div>Riobamba</div>
        <div><a href="#">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>INFORMACION </span> Informacion Cliente</div>
        <div><span>NOMBRES</span> {{ $prestacionobj->ListaRelacionadaCliente->nombre_cliente }}</div>
        <div><span>APELLIDOS</span> {{ $prestacionobj->ListaRelacionadaCliente->apellido_cliente }}</div>
        <div><span>CEDULA/RUC</span> {{ $prestacionobj->ListaRelacionadaCliente->cedula_cliente }}</div>
        <div><span>EMAIL</span> <a href="#">{{ $prestacionobj->ListaRelacionadaCliente->email_cliente }}</a></div>
        <div><span>DIRECCION</span> {{ $prestacionobj->ListaRelacionadaCliente->direccion_cliente }}</div>
      </div>
    </header>

      <table class="table table-striped">
        <thead>
          <tr>
            <th >TITULO</th>
            <th>CODIGO</th>
            <th>FECHA PRESTAMO</th>
            <th >DESCRIPCION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $prestacionobj->RelacionDonacionesHistorialIsbn->isbnObras->titulo }}</td>
           
            <td>{{ $prestacionobj->RelacionDonacionesHistorialIsbn->codigo_isbn }}</td>
            <td>{{ $prestacionobj->fecha_reservacion}}</td>
             <td>{{ $prestacionobj->RelacionDonacionesHistorialIsbn->isbnObras->descripcion_obras }}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Este Reporte Contiene toda la Informacion Detalla del prestamo de una obra a un cliente .</div>
      </div>

    <footer>
      Reporte Del Instituto Nacional Patrimonio Cultural.
    </footer>
  </body>
</html>
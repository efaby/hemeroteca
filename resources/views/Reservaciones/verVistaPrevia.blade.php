@extends ('layout.templateAdministacion')
 @section('content')


  {!!Form::open(['route'=>'reservaciones.store', 'method'=>'POST', 'id' => 'frmTest'])!!}
      

 
    <div class="row">
        <div class= "col-md-11 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;">Registro </div>
                <div class="panel-body">

                    <table class="table">
                        <thead>
                            <tr class="bg-info" style="background-color:#d3d3d3">
                                <th colspan="3">Datos Clientes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                             <td style="text-align:center;" class="col-md-3"> 
                                 <img src="{{asset("imagenes/usuarioprestacion.png")}}" alt=""  width="160" height="160"/>
                             </td>
                             <td> 
                                
                               <p></p>
                               <p></p>
                                 <table class="table table-hover">
                                    <thead>
                                    <tr>
                                    <th>Nombres </th>
                                     <th>Apellidos</th>
                                     <th>Cédula/Ruc</th>
                                     </tr>
                                     </thead>
                                     <tbody>

                                     @foreach ($Clientesobj as $cliente)
                                         <tr>
                                             <td>{{ $cliente->nombre_cliente }}</td>
                                             <td>{{ $cliente->apellido_cliente }}</td>
                                             <td>{{ $cliente->cedula_cliente }}</td>
                                             {!!Form::hidden('id_cliente',$cliente->id )!!}
                                         </tr>
                                     @endforeach
                                     </tbody>
                                 </table>
           </td>
       </tr>


                            <tr class="bg-info" style="background-color:#d3d3d3">
                                <th colspan="3">Datos Adicionales</th>
                            </tr>
 

                             <td style="text-align:center;" class="col-md-3"> 
                                 <img src="{{asset("imagenes/datosadicionales.jpg")}}" alt=""  width="160" height="160"/>
                             </td>
                             <td > 

                        <p></p>
                        <p></p>
                        <table class="table table-hover">
                                    <thead>
                                   <tr>
                                    <th>Titulo </th>
                                     <th>Autor</th>
                                     <th>Codigo</th>
                                     </tr>
                                     </thead>
                                     <tbody>

                                     @foreach ($Isbnobj as $isbn)
                                         <tr>
                                             <td>{{ $isbn->isbnObras->titulo }}</td>
                                             <td>{{ $isbn->isbnObras->autor }}</td>
                                             <td>{{ $isbn->codigo_isbn }}</td>
                                             {!!Form::hidden('id_isbn',$isbn->id )!!}
                                         </tr>
                                     @endforeach
                                     </tbody>
                                 </table>


               <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                            {!!Form::label('fecha_reservacion','Fecha Préstamo')!!}
                    </div >
                        <div class="col-md-6">
                                {!!Form::text('fecha_reservacion',$fechaActual,['class'=>'form-control','readonly'])!!}
                        </div>          
                      </div>
                </div>              
                <p></p>
                <p></p>
                <div class="form-group">
                    <div class="row">
                       <div class="col-md-6">
                            {!!Form::label('numeros_dias','Números de Dias')!!}
                        </div >
                        <div class="col-md-6">
                                {!!Form::text('numeros_dias',$numeros_dias,['class'=>'form-control','readonly'])!!}
                            </div>          
                        </div>
              </div>              
           </td>
   </tbody>
</table>
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
             <a href="{{route('reservaciones.create')}}" class="btn btn-primary" >Cancelar</a>
</div>      
</div>
</div>
</div>
 {!!Form::close()!!}

@stop
 @extends ('layout.templateAdministacion')
 @section('content')


{!!Form::model(Request::all(),['route'=>['reservaciones.create'],'method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}

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
                                <div class="form-group">
                                    <div class="row">
                                       <div class="col-md-10">
                                         
                                     
                                      {!!Form::text('cedula_cliente',null,['class'=>'form-control','placeholder'=>'---Cedula---'])!!}

                                       {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
                                    
                                    
                                       </div>
                                       <div class="col-md-2">
                                           <a href="{{asset("vercliente")}}" data-toggle="modal" data-target="#crearCliente" class="btn btn-primary" ><i class="fa fa-plus"></i></a>
                                       </div>
                                   </div>
                               </div>
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
                                             {!!Form::hidden('cedula_anterior',$cliente->cedula_cliente )!!}
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
                              <div class="form-group">
                              <div class="row">          
                                 <div class="row">
                                    {!!Form::label('Nombre','Tipo de Obra')!!}
                                  </div>
                                  <div id="areas_idareas-group" class="col-md-5">
                                  {!!Form::select('tipo_obrasid', $TiposObrasobj->lists('nombre_tipos_obras', 'id'), null, ['class' => 'form-control','placeholder'=>'---Escoja una opcion---', 'id' => 'tipo_obrasid'])!!}
                         
                                  </div>
                                   <div class="col-md-5">
                                     
                                      {!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'---Codigo Obra---'])!!}
                                      </div>
                                      <div class="col-md-2">
                                       {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
                                    </div>

                           </div > 
                           
                        </div > 
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
                                {!!Form::text('numeros_dias',0,['class'=>'form-control'])!!}
                            </div>          
                        </div>
              </div>              
           </td>
   </tbody>
</table>
             @if((count($Clientesobj)>=1)&&((count($Isbnobj)>=1)))
                          {!!Form::submit('Registro',['class'=>'btn btn-primary'])!!}
                         @else
                         <a href="#" class="btn btn-primary" disabled></i>Registro</a>
                        
                         @endif
            
             <a href="{{route('reservaciones.create')}}" class="btn btn-warning" >Cancelar</a>
</div>      
</div>
</div>
</div>




      <!-- Modal Crear Cliente -->
<div class="modal fade" id="crearCliente" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">    
    <div class="modal-content">
    </div>
  </div>
</div>
 <!-- Fin Modal Crear Cliente -->

{!!Form::close()!!}

@stop
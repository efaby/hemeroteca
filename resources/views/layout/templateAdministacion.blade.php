<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/fileinput.min.css')!!}
    {!!Html::style('css/fileinput.css')!!}

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metis.Menu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/fileinput.js')!!}
    {!!Html::script('js/fileinput.min.js')!!}
 {!!Html::script('js/bootstrapValidator.min.js')!!}
    {!!Html::style('css/styles.css')!!}

</head>

<body>

    <div id="wrapper"  >        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div> 
            <ul class="nav navbar-top-links navbar-left" style="text-align: left;" >
              <div class="logoP">
				<a href="#"><img alt="Logo" src="imagenes/logo.png"></a>
			</div>
              <div class="title">SISTEMA DE GESTIÓN DE HEMEROTECA</div>  
            </ul>
            <ul class="nav navbar-top-links navbar-right" >
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" >
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation" style="background-color: #c6c6c6">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" >
                     <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Prestación y Donación<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Préstamo Obra<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                         <li>
                                          <a href="{{route('reservaciones.create')}}"><i class="fa fa-cog" ></i> Prestación</a>
                                       </li>
                                       <li>
                                          <a href="{{route('reservaciones.index')}}"><i class='fa fa-pie-chart'></i> Reportes Individuales</a>
                                       </li>
                                       <li>
                                          <a href="{{route('reportes.index')}}"><i class='fa fa-pie-chart'></i> Reportes Clientes</a>
                                       </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Donaciones Obras<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                         <li>
                                          <a href="#"><i class='fa fa-plus fa-fw'></i> Donación</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class='fa fa-clipboard fa-fw'></i> Reportes Donación</a>
                                       </li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book"></i> Devoluciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-book'></i> Devoluciones Obras</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-book"></i> Administración Obras<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('obrasRegistros.create')}}"><i class='fa fa-book'></i> Administración</a>
                                </li>
                               
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Administración Catálogos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('tipoUsuario.index')}}"><i class='fa fa-list-ol fa-fw'></i> Tipos de Usuarios</a>
                                </li>
                                <li>
                                    <a href="{{route('tipoRegistro.index')}}"><i class='fa fa-list-ol fa-fw'></i> Tipos de Registro</a>
                                </li>
                                <li>
                                    <a href="{{route('tipoObra.index')}}"><i class='fa fa-list-ol fa-fw'></i> Tipos de Obras</a>
                                </li>
                                <li>
                                    <a href="{{route('area.index')}}"><i class='fa fa-list-ol fa-fw'></i> Areas</a>
                                </li>
                                 <li>
                                    <a href="{{route('estado.index')}}"><i class='fa fa-list-ol fa-fw'></i> Estado Historial</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                         <a href="#"><i class="fa fa-users fa-fw"></i> Administración Personas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('cliente.index')}}"><i class='fa fa-list-ol fa-fw'></i> Clientes</a>
                                </li>
                                <li>
                                    <a href="{{route('proveedor.index')}}"><i class='fa fa-list-ol fa-fw'></i> Proveedores</a>
                                </li>
                                <li>
                                    <a href="{{route('usuario.index')}}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                               

                            </ul>
                        </li>                       
                    </ul>  
                        <img src="{{asset("imagenes/inpc2.png")}}"/>
                </div>
                
            </div>
           
     </nav>

    <div id="page-wrapper" style="padding-top: 20px; min-height: 550px;">
           
            @yield('content')
        </div>
        <div class="modal-footer" >        
           <h5  style="font-family:verdana;color:white">Sistem@ Protegido por C@pyright</h5>
    
      </div>
    </div>




</body>

</html>
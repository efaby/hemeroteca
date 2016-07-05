<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     {!!Html::style('css/bootstrap.min.css')!!}
     {!!Html::style('css/full-slider.css')!!}
      {!!Html::style('css/styles.css')!!}

</head>

<body>
<div class="top-navbar">
		<div class="container">

			<!-- Begin logo -->
			<div class="logo">
				<a href="#"><img alt="Logo" src="imagenes/logo.png"></a>
			</div>
			<div class="informacion">
				<a href="#informativoModal" data-toggle="modal"><img alt="Logo" src="imagenes/informacion.png"></a>
			</div>
			<!-- /.logo -->
			<!-- End logo -->
			<!-- Begin nav menu -->
			<div class="title-menu">
				<h1>Instituto Nacional de Patrinomio Cultural</h1>
			</div>
			
			
			<!-- End nav menu -->
		</div>
		<!-- /.container -->
	</div>
    <!-- Navigation -->
   

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('imagenes/image5.jpg');"></div>
                
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('imagenes/image3.jpg');"></div>
                
            </div>
            
             <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('imagenes/image2.jpg');"></div>
               
            </div>
        </div>

		<div class="slide-text-content">
				<div class="container-fluid">
					<h1 style="color: #ff7300;">SISTEMA DE GESTIÓN DE HEMEROTECA</h1>
					<div class="clear"></div>
					<h3 style="">Presione los siguientes enlaces para acceder al sistema.</h3>
					<div class="clear"></div>
					<button data-target="#loginModal" data-toggle="modal" class="btn btn-lg btn-success btn-learn-more">Iniciar Sesión</button>
					<a class="btn btn-lg btn-primary btn-learn-more" href="views/Registro/index.php">Consultar Obra</a>
				</div>
				<!-- /.container -->
			</div>


        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
       
                <div class="copy">
                    <p>Copyright &copy; 2016  Riobamba - Ecuador</p>
           </div>

    </header>


     



<!--login modal-->
<div id="loginModal" class ="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div  class="modal-dialog" style="width: 400px;">
  <div class="modal-content">
      <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center" >Acceso al Sistema</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-success ">
              	<i class="fa fa-sign-in"></i>Ingresar</button>
              <span><a href="#">Olvide Contraseña..</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
            
      </div>
  </div>
  </div>
</div>
<!--login modal-->

<!--Informativo modal-->
<div id="informativoModal" class ="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div  class="modal-dialog" >
  <div class="modal-content">
      <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 >Informativo</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group" style="text-align: justify;">   
                
            El Sistema permite la consulta de obras disponibles del Instituto Nacional Patrimonio Cultural con sede en la Ciudad de Riobamba.<br>
            Para su respectiva prestación de la obra debe acercarse a las Oficinas del la Institución.
            <br>
            <br>
            <table style="width: 100%;">
            <tr>
            <td style="vertical-align: top;"> <h4>Contactos</h4>
             Para mayor Información  comunicarse con:<br>
             <strong>Saul Ibarra</strong>   Telf:00000<br>
             <i>Desarrollador</i>  
            </td>
            <td><img alt="desarrolador" src="imagenes/programador.png" width="200px"></td></tr>
            </table>
                       
            </div>
            <br>
          </form>
      </div>
      <div class="modal-footer" >
         
           <h5 >Sistema Protegido por Copyright &copy; 2016</h5>
        
      </div>
  </div>
  </div>
</div>
<!--Informativo modal-->



{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
  





</body>
</html>
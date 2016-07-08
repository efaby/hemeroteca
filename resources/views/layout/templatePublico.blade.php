<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hemeroteca Virtual</title>
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
 {!!Html::script('js/jquery-ui.min.js')!!}
 
    {!!Html::style('css/styles.css')!!}
     {!!Html::style('css/jquery-ui.min.css')!!}

</head>

<body>

    <div id="wrapper"  >        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                            
            </div> 
            <ul class="nav navbar-top-links navbar-left" style="text-align: left;" >
              <div class="logoP">
				<a href="#"><img alt="Logo" src="{{asset('imagenes/logo.png')}}"></a>
			</div>
              <div class="title">SISTEMA DE GESTIÓN DE HEMEROTECA</div>  
            </ul>
            

            
           
     </nav>

    	<div id="page-wrapper" style="padding-top: 20px; min-height: 300px; margin-left: 0px;">           
            @yield('content')
        </div>
        <div class="footer" >        
           Copyright &copy; 2016  Riobamba - Ecuador    
      </div>
    </div>




</body>

</html>
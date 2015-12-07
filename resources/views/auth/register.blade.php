<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="{{ url('admin/regsave') }}" method="POST">

		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
		            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password"><br><p>
		            <button class="btn btn-theme btn-block" href="{{ url('admin/login') }}" type="submit">
                <i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>
		        </div>
		      </form>
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ url('js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("{{ url('/img/login-bg.jpg') }}", {speed: 500});
    </script>


  </body>
</html>

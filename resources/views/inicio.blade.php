<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RabbitCloud</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <IMG SRC="{{ $portada->imagen }}" WIDTH="40" HEIGHT="40">
                <a class="navbar-brand page-scroll" href="#page-top">RabbitCloud</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#mision">Mision y Vision</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#registrar">Registrarse</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- IMPRIMIR ERRORES -->
    @if(count($errors)>0)
    <div class="alert alert-danger">
    	<ul>
    		@foreach($errors->all() as $error)
    		<li>{{ $error }}</li>
    		@endforeach
    	</ul>
    </div>
    @endif

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">{{ $portada->nombre }}</h1>
                <hr>
                <p>{{ $portada->nombre }}</p>
               
            </div>
        </div>
    </header>

    <!-- AREAS -->
     <section class="no-padding" id="logo">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-12">
                    <a href="{{ $portada->imagen }}" class="portfolio-box">
                        <img src="{{ $portada->imagen }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    LOGO
                                </div>
                                <div class="project-name">
                                    {{ $portada->nombre }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                                
             
            </div>
        </div>
    </section>

    <section id="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
           <video controls>

            <source src="{{ $portada->video }}" type="video/mp4">
            Tu navegador no implementa el elemento <code>video</code>.
            </video>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-primary" id="mision">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">MISION</h2>
                    <hr class="light">
                    <p class="text-faded">
					{{ $portada->mision }}</p>
                    <h2 class="section-heading">VISION</h2>
                    <hr class="light">
                    <p class="text-faded">{{ $portada->vision }} </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About me</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <p class="text-muted">{{ $portada->aboutme }}</p>
                    </div>
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark" id="registrar">
    	<form action="{{ route('registrar') }}" method="POST">

    		{{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">REGISTRAR</h2>
                    <hr class="light">
                    
                   <div class="form-group col-lg-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="apellidos">Apellidos</label>
                        <input type="apellidos" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="clave">Password</label>
                        <input type="password" name="clave" class="form-control" value="{{ old('clave') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" class="form-control" value="{{ old('correo') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="genero">Genero [F/M]</label>
                        <input type="text" name="genero" class="form-control" value="{{ old('genero') }}">
                    </div>
                    <div class="form-group col-lg-12">
                    <label for="genero">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nac" step="1" min="1990-01-01" max="2017-12-31" value="1990-01-01" class="form-control" >
                    </div>
                     <div class="form-group col-lg-12">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                    </div>
	                <div class="form-group col-lg-12">
	                   <button type="submit" class="btn btn-default btn-xl sr-button">ENVIAR CONFIRMACION</button>
    	                                
                        <p> <i class="fa fa-envelope-o fa-3x sr-contact"></i></p>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>

   <section class="bg-primary" id="login">
     <form action="{{ route('store') }}" method="POST">

            {{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">LOGIN</h2>
                    <hr class="light">
                    
                   <div class="form-group col-lg-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="pass" >Password</label>
                        <input type="password" name="pass" class="form-control" value="{{ old('pass') }}">
                   
	                </div>
                    <div class="form-group col-lg-12">
                       <button type="submit" class="btn btn-default btn-xl sr-button">ENTRAR</button>
                       
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>

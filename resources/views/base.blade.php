<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/plantillas/base.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Muebles de Madera Maya</title>
    <link rel="icon" type="image/gif/png" href="{{ asset('img/logos/logo1.png') }}">
  	@yield('estilos')

  </head>
  <body>
    <header class="jumbotron" style="margin:auto; border-radius: 0px;">
      <div class="row">
        <div class="container-fluid col-4 text-center align-self-center">
          <a href="{{ url('') }}"><img src="{{ asset('img/logos/logo.png') }}" width="150px" height="170px" alt=""></a>
        </div>
        <div class="container col-8 pt-3" style="color: #6A9DD1">
          <h1 id="titulo" class="col-sm-auto text-center" style="font-size: 4rem;"><b>Muebles de Madera Maya</b></h1>
          <p id="subtitulo" class="col-sm-auto text-center" style="font-size: 1.5rem!important;">Fabricante de muebles en acero y madera</p>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #BE986D; z-index: 1;">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('') }}">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('quien-soy') }}">QUIEN SOY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('muebles') }}">MUEBLES</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contacto') }}">CONTACTO</a>
          </li>
          
          {{--  <li class="nav-item">
            <a class="nav-link" href="{{ url('pago') }}">Pago</a>
          </li>--}}

        </ul>
      </div>
    </nav>
    <main>
      @yield('contenido')
    </main>
	

    <footer class="container-fluid">
      <p>Author: Miguel Enrique</p>
      <p>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
      <div class="row">
        <a class="col-6" target="_blank" href="https://www.facebook.com/MuebledeMaderaMaya"><i class="fa fa-facebook-square"></i> Facebook</a>
        <a class="col-6" target="_blank" href="https://www.instagram.com/muebles_de_madera_maya_tuxtla/"><i class="fa fa-instagram"></i> Instagram</a>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
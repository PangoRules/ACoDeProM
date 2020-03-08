<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/plantillas/base.css') }}">
  
  	@yield('estilos')

  </head>
  <body>
    <header class="container-fluid ">
      <div class="container">
        <div class="row justify-content-center">
          <img id="logoP" src="{{ asset('img/logos/logo1.png') }}" alt="">
          <div class="col-6 pl-3 pr-3 pt-4 text-center">
            <span class="lead display-4 pr-3 pt-4">Corporativo</span>
            <h1 class="display-4"><b>ACoDeProM</b></h1>
            <p class="display-4 ">Asesores, Consultores y Desarrolladores de Proyectos Productivos</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-3">
            <a href="{{ url('') }}"><p>INICIO</p></a>
          </div>
          <div class="col-3">
            <a href="{{ url('nuestra-empresa') }}"><p>NUESTRA EMPRESA</p></a>
          </div>
          <div class="col-3">
            <div class="dropdown">
              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SERVICIOS
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('proyectos') }}">Proyectos</a>
                <a class="dropdown-item" href="{{ url('asesorias') }}">Asesorias</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <a href="{{ url('contacto') }}"><p>CONTACTO</p></a>
          </div>
        </div>
      </div>  
    </header>

	@yield('contenido')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
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
    <header class="jumbotron">
      <h1>ACoDeProM</h1>
      <p>Consultores y Desarrolladores de Proyectos Productivos</p>
    </header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <span class="navbar-text">ACoDeProM</span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('nuestra-empresa') }}">Nuestra Empresa</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Servicios <span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown_target">
              <a class="dropdown-item" href="#">Asesorias</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Proyectos</a>
            </div>
            </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contacto') }}">Contacto</a>
          </li>

        </ul>
      </div>
    </nav>
    
	@yield('contenido')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
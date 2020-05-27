@extends('base')

@section('estilos')
  <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('contenido')
<div class="container-fluid text-center">
  <h2 class="display-4 text-center" style="margin-top:40px!important;"><b>Bienvenidos, es su casa..!!</b></h2>
  <h3 class="border-left mt-5" style="margin-bottom: 0!important;">MI ESTILO DE FABRICACION</h3>
  <span><small>(Solo en Acero y Madera)</small></span>
</div>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card" style="margin-top: 1rem">
        <div id="carouselRackTV" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselRackTV" data-slide-to="0" class="active"></li>
            <li data-target="#carouselRackTV" data-slide-to="1"></li>
            <li data-target="#carouselRackTV" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/muebles/racksTV/rack1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/racksTV/rack2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/racksTV/rack3.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselRackTV" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselRackTV" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Racks para TV</h5>
          <p class="card-text">Racks de madera para sostener tanto pantallas como centros de diversion.</p>
        </div>
      </div>
    </div>
    <div class="mt-3 col-lg-4 col-md-4">
      <div class="card">
        <div id="carouselMesasCentro" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselMesasCentro" data-slide-to="0" class="active"></li>
            <li data-target="#carouselMesasCentro" data-slide-to="1"></li>
            <li data-target="#carouselMesasCentro" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/muebles/mesascentroCafe/mesacentro1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/mesascentroCafe/mesacentro2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/mesascentroCafe/mesacentro3.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselMesasCentro" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselMesasCentro" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Mesas de Centro</h5>
          <p class="card-text">Mesas para centros de salas perfectas para tomar un buen cafe por las noches.</p>
        </div>
      </div>
    </div>
    <div class="mt-3 col-lg-4 col-md-4">
      <div class="card">
        <div id="carouselRecibidores" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselRecibidores" data-slide-to="0" class="active"></li>
            <li data-target="#carouselRecibidores" data-slide-to="1"></li>
            <li data-target="#carouselRecibidores" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/muebles/recibidores/recibidor1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/recibidores/recibidor2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/muebles/recibidores/recibidor3.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselRecibidores" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselRecibidores" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Recibidores</h5>
          <p class="card-text">Reccibidores de madera con y sin cajones, ideales para salas o cuartos.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container text-center mt-4">
  <p><span id="spansito">NOTA: </span>Las presentes imágenes, representan nuestro estilo de fabricación y trabajos, mas no son nuestros trabajos, en días siguientes iremos cambiando las presentes por las imágenes fieles nuestras. </p>
</div>

@endsection
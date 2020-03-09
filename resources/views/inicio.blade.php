@extends('base')

@section('estilos')

@endsection

@section('contenido')
<h2 class="display-4 text-center" style="margin-top:40px!important;"><b>Bienvenidos a ACoDeProM</b></h2>
<h3 class="border-left mt-5">Proyectos y asesorias realizadas</h3>

<div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card" >
      <img src="{{ asset('img/proyectos/hortalizas.jpg') }}" class="card-img-top" alt="Hortalizas de habanero y carambola">
      <div class="card-body">
        <h5 class="card-title">Hortalizas de habanero y carambola</h5>
        <p class="card-text">Desarrollamos proyectos y otorgamos asesorías sobre hortalizas.</p>
        <p class="card-text">-Cultivo</p>
        <p class="card-text">-Manejo</p>
        <p class="card-text">-Cosecha</p>
        <p class="card-text">-Logística de entrega</p>
        <p class="card-text">-Potenciales clientes</p>
      </div>
      <div class="card-footer">
	      <small class="text-muted">Carambola y Chile Habanero</small>
	    </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" >
      <img src="{{ asset('img/proyectos/mojarratapia.jpg') }}" class="card-img-top" alt="Mojarra Tilapia">
      <div class="card-body">
        <h5 class="card-title">Mojarra Tilapia</h5>
        <p class="card-text">Desarrollamos proyectos sobre la siembra, manejo y producción de mojarra tilapia.</p>
        <p class="card-text">-Cultivo</p>
        <p class="card-text">-Manejo</p>
        <p class="card-text">-Cosecha</p>
        <p class="card-text">-Logística de entrega</p>
        <p class="card-text">-Potenciales clientes</p>
      </div>
      <div class="card-footer">
	      <small class="text-muted">Mojarra Ttilapia</small>
	    </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" >
      <img src="{{ asset('img/proyectos/camarongranja.jpg') }}" class="card-img-top" alt="Camaron de Granja">
      <div class="card-body">
        <h5 class="card-title">Camaron de Granja</h5>
        <p class="card-text">Desarrollamos proyectos de seimbra, manejo y producción de camarón de granja.</p>
        <p class="card-text">-Cultivo</p>
        <p class="card-text">-Manejo</p>
        <p class="card-text">-Cosecha</p>
        <p class="card-text">-Logística de entrega</p>
        <p class="card-text">-Potenciales clientes</p>
      </div>
      <div class="card-footer">
	      <small class="text-muted">Camaron de Granja</small>
	    </div>
    </div>
  </div>

@endsection
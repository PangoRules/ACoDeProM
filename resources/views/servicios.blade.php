@extends('base')

@section('estilos')
	<link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
	<style>
		
	</style>
@endsection

@section('contenido')
@if ($errors->any())
    <div class="container alert alert-danger align-items-center mt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
	<div class="container alert alert-success align-items-center mt-4" role="alert">
	  <span>{{session('success')}}</span>
	</div>
@endif
	<h2 class="display-4 text-center" style="margin-top:40px!important;margin-bottom:40px!important;">Algunos de mis trabajos...</h2>
	<div class="container-fluid text-center">
		<div class="row mt-4">
			<div class="col-lg-3 col-md-6 mb-4">
				<img src="{{ asset('img/muebles/misMuebles/closet.jpg') }}" alt="Closet de Madera" class="img-fluid mb-4">
				<img src="{{ asset('img/muebles/misMuebles/escritorio.jpg') }}" alt="Escritorio de Madera" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-6 mb-4">
				<img src="{{ asset('img/muebles/misMuebles/trastero2.jpg') }}" alt="Trastero de Madera" class="img-fluid mb-4">
				<img src="{{ asset('img/muebles/misMuebles/cama.jpg') }}" alt="Cama de Madera" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-6 mb-4">
				<img src="{{ asset('img/muebles/misMuebles/casa.jpg') }}" alt="Casa de Madera" class="img-fluid mb-4">
				<img src="{{ asset('img/muebles/misMuebles/mesaMadera.jpg') }}" alt="Mesa de Madera" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-6 mb-4">
				<img src="{{ asset('img/muebles/misMuebles/lavamanos.jpg') }}" alt="Lavamanos de Madera" class="img-fluid mb-4">
				<img src="{{ asset('img/muebles/misMuebles/estante.jpg') }}" alt="Estante de Madera" class="img-fluid">
			</div>
		</div>
	</div>
	{{-- MANDADOR CORREOS --}}
	<div id="popupForm" class="container-fluid pop-UpS">
		<form method="post" action="{{ route('MailSender') }}">
			@csrf
			<div class="container-fluid text-right">
				<a href="#" onclick="closeForm()" class="closePS">X</a>	
			</div>
			
			<div class="form-group">
				<label for="proyectoOasesoria">Servicio seleccionado</label>
				<input name="NombreProy" type="text" class="form-control" id="proyectoOasesoria" placeholder="Ingrese el nombre del proyecto o asesoria deseada">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input name="NombrePer" type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre aquí">
			</div>
			<div class="form-group">
				<label for="correo">E-mail</label>
				<input name="Correo" type="email" class="form-control" id="correo" placeholder="Ingrese su dirección de correo electrónico">
			</div>
			<div class="form-group">
				<label for="comentario">Comentario</label>
				<textarea name="Comentario" id="comentario" class="form-control" aria-label="comentario"></textarea>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
			</div>	
		</form>
	</div>
	{{-- MANDADOR CORREOS --}}
	<script>
	function openForm() {
	document.getElementById("popupForm").style.visibility="visible";
	document.getElementById("popupForm").style.opacity="1";
	}

	function closeForm() {
	document.getElementById("popupForm").style.visibility="hidden";
	document.getElementById("popupForm").style.opacity="0";
	}
    </script>
@endsection
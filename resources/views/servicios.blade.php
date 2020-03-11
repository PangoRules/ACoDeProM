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
	<h2 class="display-4 text-center" style="margin-top:40px!important;">PROYECTOS</h2>
	<div class="container mt-4 p-4">
		<table class="table table-hover">
			<caption>Lista de proyectos realizados</caption>
			<thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Proyecto</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Siembra, manejo y sustentabilidad de hortalizas</td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Siembra, manejo y producción de mojarra tilapia</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Siembra, manejo y producción de camarón de granja</td>
				</tr>
			</tbody>
		</table>
		<div class="container text-center">
			<button id="cotProy" type="button" class="btn btn-dark" onclick="openForm()">Solicitar Cotización de Proyecto</button>
		</div>
	</div>
	<h2 class="display-4 text-center" style="margin-top:40px!important;">ASESORIAS</h2>
	<div class="container mt-4 p-4">
		<table class="table table-hover">
			<caption>Lista de asesorias realizadas</caption>
			<thead class="thead-dark">
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Asesoria</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>Proyectos de sustentabilidad alimenticia: Remoto y Sitio</td>
			</tr>
			<tr>
			  <th scope="row">2</th>
			  <td>Minería sustentable y amigable con el medio ambiente y la comunidad</td>
			</tr>
			<tr>
			  <th scope="row">3</th>
			  <td>Logística y transporte de mercancías y minerales diversos</td>
			</tr>
			<tr>
			  <th scope="row">4</th>
			  <td>Planificación de industria extractiva de minerales</td>
			</tr>
			</tbody>
		</table>
		<div class="container text-center">
			<button id="cotAses" type="button" class="btn btn-dark" onclick="openForm()">Solicitar Cotización de Asesoria</button>
		</div>
	</div>
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
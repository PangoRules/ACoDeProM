@extends('base')

@section('estilos')
	<style>
		td{
			cursor: pointer;
		}
	</style>
@endsection

@section('contenido')
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
	</div>
	
@endsection
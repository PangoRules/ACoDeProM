@extends('base')

@section('estilos')
	<style>
		td{
			cursor: pointer;
		}
	</style>
@endsection

@section('contenido')
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
				  <td>Siembre, manejo y producción de mojarra tilapia</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Siembra, manejo y producción de camarón de granja</td>
				</tr>
			</tbody>
		</table>
	</div>
	
@endsection
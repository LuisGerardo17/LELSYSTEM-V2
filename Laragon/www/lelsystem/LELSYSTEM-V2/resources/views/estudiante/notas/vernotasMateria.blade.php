@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(233, 233, 233)')
@section('titulo', 'Index')
@section('seccion')
<style>
	th{
		text-align: center;
	}
</style>
<div class="container" style="background-color: white; padding-bottom: 50px;">
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
        <li><a href="#">Nombre materia</a></li>
		<li class="active">Notas</li>
	</ol>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header text-center">
			  <h1 class="text-titles"><b>Mis  Notas</b></h1>
			</div>
		</div>

		<div class="table-responsive estado">
			<table class="table table-hover text-center">
				<thead>
					<th>Actividades </th>
					<th>Semestre</th>
					<th>Nota</th>
				</thead>
				<tbody>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>
					<tr>
						<th>realizar un cuestionatrio del examen</th>
						<th>Primero</th>
						<td>9.00</td>
					</tr>


					
					         
				</tbody>
			</table>
		</div>
</div>
	
@endsection
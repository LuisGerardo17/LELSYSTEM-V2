@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(233, 233, 233)')
@section('titulo', 'Index')
@section('seccion')
<style>
	th{
		text-align: center;
	}
</style>
<div class="container" style="background-color: white;">
	<ol class="breadcrumb">
		<li class="active">Home</li>
	</ol>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header text-center">
			  <h1 class="text-titles"><b>Mis  Asistencias</b></h1>
			</div>
		</div>

		<div class="table-responsive estado">
			<table class="table table-hover text-center">
				<thead>
					<th>Materia </th>
					<th>Porcentaje</th>
					<th>Estado</th>
				</thead>
				<tbody>
					<tr>
						<th>Matematicas</th>
						<td>70%</td>
						<td class="aprobado">Aprobado</td>
					</tr>
					<tr>
						<th>Software</th>
						<td>65%</td>
						<td class="reprobado">Reprobado</td>
					</tr>
                    <tr>
						<th>Desarrollo</th>
						<td>100%</td>
						<td class="aprobado">Aprobado</td>
					</tr>
					<tr>
						<th>Culinario</th>
						<td>40%</td>
						<td class="reprobado">Reprobado</td>
					</tr>      
				</tbody>
			</table>
		</div>

	<!-- NavBar
	<nav class="full-box dashboard-Navbar">
			<div class="full-box text-center text-uppercase">
                <h3 class="titulo">BIENVENIDO ESTUDIANTE</h3>
			</div>
		</nav>-->
</div>
	
@endsection

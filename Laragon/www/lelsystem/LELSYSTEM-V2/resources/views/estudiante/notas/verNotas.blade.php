@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(233, 233, 233)')
@section('titulo', 'Index')
@section('seccion')
<style>
	th{
		text-align: center;
	}
</style>
<div class="container partes" style="background-color: white;">
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">ver Notas</li>
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
					<th>Materia </th>
					<th>semestre</th>
					<th>Nota</th>
					<th>Estado</th>
				</thead>
				<tbody>
					<tr>
						<th>Matematicas</th>
						<th>Primero</th>
						<td>9.00</td>
						<td class="aprobado">aprobado</td>
					</tr>
					<tr>
						<th>Matematicas</th>
						<th>Segundo</th>
						<td>6.00</td>
						<td class="reprobado">reprobado</td>
					</tr>
					         
				</tbody>
			</table>
		</div>
</div>
	
@endsection


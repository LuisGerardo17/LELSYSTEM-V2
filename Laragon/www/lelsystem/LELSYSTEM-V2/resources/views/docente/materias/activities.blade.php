@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Actividades <small>Activities</small></h1>
			</div>
			<p class="lead">Las actividades son todas aquellas tareas o labores que cada individuo ejerce diariamente, están las actividades laborales, las actividades escolares, las actividades recreativas, las actividades físicas, etc.</p>
		</div>
		<div class="container-fluid"> 
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li><a href="#list" data-toggle="tab">Actividades</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Codigo</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead> 
									<tbody>
									@foreach ($actividades as $items)  
										<tr>
											<td>{{$items->codigo_actividad}}</td>
											<td>{{$items->nombre_actividad}}</td>
											<td>{{$items->descripcion}}</td>
											<td>
												<a href="{{ url('Act/') .'/'. $items->codigo_actividad . '/edit' }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td>
												<form action="{{ url('Act/'.$items->codigo_actividad) }}" method="POST" class="Eliminar">
													@csrf
													@method('DELETE')
													<button type="submit"><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @endsection

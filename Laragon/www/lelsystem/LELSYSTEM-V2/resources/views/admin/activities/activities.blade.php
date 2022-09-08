@extends('admin.layouts.admin')

@section('titulo','Section')
@section('contenido')
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
					    <li><a href="#list" data-toggle="tab">Lista</a></li>
					    <li class="active"><a href="#new" data-toggle="tab">Agregar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('activities/activities')}}" method="POST">
										@csrf
											<div class="form-group label-floating">
											  <label class="control-label">Codigo</label>
											  <input class="form-control" type="text" name="codigo_actividad" >
											</div>
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text" name="nombre_actividad" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Descripcion</label>
											  <input class="form-control" type="text" name="descripcion" >
											</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
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

											<td><button type="submit" ><a href="{{ url('activities/activities/') .'/'. $items->codigo_actividad . '/edit' }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></button></td>

											<form action="{{ url('activities/activities/'.$items->codigo_actividad) }}" method="POST" class="Eliminar">
												@csrf
												@method('DELETE')
											<td><button type="submit" ><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></button></td>
											</form>
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

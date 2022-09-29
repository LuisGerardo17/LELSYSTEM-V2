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
				<li class="active"><a href="#new" data-toggle="tab">New</a></li>
				<li><a href="#list" data-toggle="tab">List</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new"> 
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('activities/activities/'.$act->codigo_actividad) }}" method="POST">
								@csrf    
								@method('PUT')   
									<div class="form-group label-floating">
										<label class="control-label">Codigo</label>
										<input class="form-control" type="text" name="codigo_actividad" value="{{$act->codigo_actividad}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
										<input class="form-control" type="text" name="nombre_actividad" value="{{$act->nombre_actividad}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Descripcion</label>
										<input class="form-control" type="text" name="descripcion" value="{{$act->descripcion}}">
									</div>
									<p class="text-center">
										<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar cambios</button>
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
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Section</th>
									<th class="text-center">Status</th>
									<th class="text-center">Year</th>
									<th class="text-center">Update</th>
									<th class="text-center">Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>First</td>
									<td>A</td>
									<td>Active</td>
									<td>2017</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>First</td>
									<td>B</td>
									<td>Active</td>
									<td>2017</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Third</td>
									<td>A</td>
									<td>Active</td>
									<td>2017</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
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
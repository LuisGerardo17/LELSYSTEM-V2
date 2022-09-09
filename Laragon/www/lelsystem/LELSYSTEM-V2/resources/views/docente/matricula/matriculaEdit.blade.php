@extends('docente.layouts.activitiesDoce')
@section('titulo','Materias')
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
			<li><a href="#list" data-toggle="tab">Lista</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('matricula/'.$matri->cedula) }}" method="POST">
								@csrf
								@method('PUT')
									<div class="form-group label-floating">
										<label class="control-label">Cedula</label>
										<input class="form-control" type="text" name="cedula" value="{{ isset($matri) ? $matri->cedula : old('cedula') }}" {{ isset($matri) ? 'disabled' : '' }}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Nombres</label>
										<input class="form-control" type="text" name="nombres" value="{{ isset($matri) ? $matri->nombres : old('nombres') }}" {{ isset($matri) ? 'disabled' : '' }}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Apellidos</label>
										<input class="form-control" type="text" name="apellidos" value="{{ isset($matri) ? $matri->apellidos : old('apellidos') }}" {{ isset($matri) ? 'disabled' : '' }}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Correo</label>
										<input class="form-control" type="text" name="correo" value="{{ isset($matri) ? $matri->correo : old('correo') }}" {{ isset($matri) ? 'disabled' : '' }}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Codigo curso</label>
										<input class="form-control" type="text" name="codigo_curso" value="{{$matri->codigo_curso}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Estado</label>
											  <br>
                                              <input  name="estado" type="radio" value="{{$matri->estado}}">
                                              <label>Activa</label>
                                              <input  name="estado" type="radio" value="{{$matri->estado}}">
                                              <label>Inactiva</label>
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

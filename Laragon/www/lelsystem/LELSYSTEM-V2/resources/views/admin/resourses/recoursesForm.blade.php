@extends('admin.layouts.admin')

@section('titulo','Teacher')
@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i>  Docente-Recursos <small>Teacher-Means</small></h1>
			</div>
			<p class="lead">Los recursos de aprendizaje presentan muchas ventajas en la educación virtual, algunos de ellos son: la múltiple variedad de presentación multimedia en formatos animados; la facilidad para acercar al estudiante a la comprensión de procesos y acceso al mundo real; dar la oportunidad de proveer un aprendizaje al ritmo del estudiante; entre otros.</p>
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
									    <form action="">
									    	<div class="form-group label-floating">
											  <label class="control-label">Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Last Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Address</label>
											  <textarea class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Phone</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Specialty</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Birthday</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group">
										        <label class="control-label">Gender</label>
										        <select class="form-control">
										          <option>Male</option>
										          <option>Female</option>
										        </select>
										    </div>
											<div class="form-group">
										      <label class="control-label">Photo</label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse...">
										        <input type="file" >
										      </div>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
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
											<th class="text-center">Last Name</th>
											<th class="text-center">Address</th>
											<th class="text-center">Email</th>
											<th class="text-center">Phone</th>
											<th class="text-center">Specialty</th>
											<th class="text-center">Birthday</th>
											<th class="text-center">Gender</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Carlos</td>
											<td>Alfaro</td>
											<td>El Salvador</td>
											<td>carlos@gmail.com</td>
											<td>+50312345678</td>
											<td>IT</td>
											<td>07/03/1997</td>
											<td>Male</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Alicia</td>
											<td>Melendez</td>
											<td>El Salvador</td>
											<td>alicia@gmail.com</td>
											<td>+50312345678</td>
											<td>Social Work</td>
											<td>23/07/1997</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sarai</td>
											<td>Lopez</td>
											<td>El Salvador</td>
											<td>sarai@gmail.com</td>
											<td>+50312345678</td>
											<td>Lawyer</td>
											<td>10/09/1991</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Alba</td>
											<td>Bonilla</td>
											<td>El Salvador</td>
											<td>alba@gmail.com</td>
											<td>+50312345678</td>
											<td>Designer</td>
											<td>19/04/1993</td>
											<td>Female</td>
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

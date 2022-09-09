@extends('docente.layouts.activitiesDoce')
@section('titulo','notas')
@section('seccion')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-n-1-square zmdi-hc-fw"></i> Notas <small>estudiantes</small></h1>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
                        <li><a href="#new" data-toggle="tab">Agregar notas</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
									    	<div class="form-group label-floating">
											  <label class="control-label">Code</label>
											  <input class="form-control" type="text">
											</div>
									    	<div class="form-group label-floating">
											  <label class="control-label">Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Capacity</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										      <label class="control-label">Status</label>
										        <select class="form-control">
										          <option>Active</option>
										          <option>Disable</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane fade active in" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">cedula</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Nombres</th>
											<th class="text-center">Nota parcial 1</th>
											<th class="text-center">Nota parcial 2</th>
											<th class="text-center">Nota final</th>
                                            <th class="text-center">estado</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>11111111111</td>
											<td>Enrique Sebastian</td>
											<td>Mera Yela</td>
											<td>7.50</td>
											<td>7.50</td>
                                            <td>7.50</td>
                                            <td class="aprobado"><b>aprobado</b> </td>
										</tr>
										<tr>
											<td>11111111111</td>
											<td>Enrique Sebastian</td>
											<td>Mera Yela</td>
											<td>7.50</td>
											<td>7.50</td>
                                            <td>6.50</td>
                                            <td class="reprobado"><b>reprobado</b> </td>
										</tr>
										<tr>
											<td>11111111111</td>
											<td>Enrique Sebastian</td>
											<td>Mera Yela</td>
											<td>7.50</td>
											<td>7.50</td>
                                            <td>7.50</td>
                                            <td class="aprobado"><b>aprobado</b> </td>
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

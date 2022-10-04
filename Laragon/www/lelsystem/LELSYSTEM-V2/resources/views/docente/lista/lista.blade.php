@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Estudiante <small>Estudiante</small></h1>
			</div>
			<p class="lead">Un docente tiene planeación, organización, dirección y control estudiantil, donde sus objetivos están en la misma dirección de las metas y propósitos de la institución.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					<li class="active"><a href="#list" data-toggle="tab">Lista de estudiantes</a></li>

					</ul>
					  	<div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Cedula</th>
											<th class="text-center">Nombres</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Correo</th>
										</tr>
									</thead>
									<tbody>
									@foreach($estudiantes as $admin)
                                            <tr>
                                                <td>{{ $admin->user->cedula }}</td>
                                                <td>{{ $admin->user->nombres }}</td>
                                                <td>{{ $admin->user->apellidos }}</td>
                                                <td>{{ $admin->user->correo }}</td>
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

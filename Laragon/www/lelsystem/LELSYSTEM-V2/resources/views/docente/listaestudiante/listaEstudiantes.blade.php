
@extends('docente.layouts.activitiesDoce')
@section('titulo','Docente')
@section('seccion')
		<!-- Content page -->

		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Estudiante <small>Estudiante</small></h1>
			</div>
			<p class="lead">Un administrador es una persona con visión, que es capaz de aplicar y desarrollar todos los conocimientos acerca de la planeación, organización, dirección y control empresarial, donde sus objetivos están en la misma dirección de las metas y propósitos de la institución.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
					  	<li><a href="#new" data-toggle="tab">Agregar</a></li>

					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade {{ ($errors->any()) ? 'active in':'' }}" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('estudiantes') }}" method="post" enctype="multipart/form-data">
                                            @csrf
									    	@include('admin.estudiante.estudianteForm')
									    </form>

									</div>
								</div>
							</div>
						</div>

                        <x:notify-messages/>
					  	<div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
							<div class="table-responsive">
                          <table class="table table-hover text-center" method="GET">
								<table class="table table-hover text-center">
									<thead>
										<tr>
                                            <th class="text-center">Cedula</th>
                                            <th class="text-center">Nombres</th>
											<th class="text-center">Apellido</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($estudiantes as $admin)
                                            <tr>
                                                <td>{{ $admin->user->cedula }}</td>
                                                <td>{{ $admin->user->nombres }}</td>
                                                <td>{{ $admin->user->apellidos }}</td>
                                                <td>{{ $admin->user->correo }}</td>
                                                 <td>
                                                  <a href="{{ url('admin/estudiante/'. $admin->cedula .'/edit') }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                                                </td>

                                                <td>
                                                    <form action="{{ url('/admin/estudiante/').'/'.$admin->cedula }}" method="post" class="Eliminar">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"><a class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></button>
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
                             </table>
								{!! $estudiantes->links() !!}
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@php
    Session::forget('session')
@endphp
@endsection

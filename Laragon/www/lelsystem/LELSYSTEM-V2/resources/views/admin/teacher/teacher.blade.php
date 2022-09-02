@extends('admin.layouts.admin')

@section('titulo','Teacher')
@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Docente <small>Teacher</small></h1>
			</div>
			<p class="lead">El docente es aquella persona que se dedica de forma profesional a la enseñanza. La docencia es una profesión cuyo objetivo principal es transmitir la enseñanza a otras personas, se puede hablar en un marco general de enseñanza o sobre un área en específico.</p>
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
									    <form action="{{ url('Teacher/Teacher') }}" method="post" enctype="multipart/form-data">
											@csrf
									    	@include('admin.teacher.teacherForm')
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
											<th class="text-center">Cedula</th>
                                            <th class="text-center">Foto</th>
											<th class="text-center">Nombres</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Direccion</th>
											<th class="text-center">Correo</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($docentes as $items)
										<tr>
											<td>{{$items->user->cedula}}</td>
                                            <td><img src="{{asset('storage').'/'.$items->user->imagen}}" alt="" width="50px"></td>
											<td>{{$items->user->nombres}}</td>
											<td>{{$items->user->apellidos}}</td>
											<td>{{$items->user->direccion}}</td> 
											<td>{{$items->user->correo}}</td>
											<td>{{$items->user->telefono}}</td>
											<form action="{{ url('/Teacher/Teacher/edit/').'/'.$items->cedula }}" method="POST">
											@csrf
											@method('PUT')
											<td><button type="submit"><a href="" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></button></td>
											</form>
											<form action="{{ url('/Teacher/Teacher/').'/'.$items->cedula }}" method="POST">
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
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
					<li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
					    <li><a href="#new" data-toggle="tab">Asistencias</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade {{ ($errors->any()) ? 'active in' : '' }}" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('lista')}}" method="POST">
										@csrf
									    	@include('docente.listados.listadosForm')
									    </form>
									</div>
								</div> 
							</div>
						</div>
					  	<div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Cedula</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Actualizar</th>
										</tr>
									</thead> 
									<tbody>
                                    @foreach ($listadoEstudiantes as $items)
 
										<tr> 
											<td>{{$items->cedula}}</td>
											<td>{{$items->fecha}}</td>
											<td>{{$items->descripcion}}</td>

											<td><a href="{{ url('lista/'.$items->cedula. '/edit' )}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
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

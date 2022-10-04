@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Examen <small>Examen</small></h1>
			</div>
			<p class="lead">Los examenes son todas aquellas evaluaciones que se realizan, para asi evaluar el conocimiento adquirido por parte del estudiante.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li><a href="#list" data-toggle="tab">Examenes</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Codigo</th>
											<th class="text-center">Examen</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Parcial</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($exa as $items)
										<tr>
											<td>{{$items->codigo_examen}}</td>
											<td>{{$items->nombre_examen}}</td>
											<td>{{$items->descripcion}}</td>
											<td>{{$items->parcial}}</td>
											<td>
												<a href="{{ url('Examen/').'/'. $items->codigo_examen . '/edit'}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td>
												<form action="{{ url('Examen/'.$items->codigo_examen) }}" method="POST" class="Eliminar">
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

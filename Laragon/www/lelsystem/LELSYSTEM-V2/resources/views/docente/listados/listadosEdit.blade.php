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
				<li class="active"><a href="#new" data-toggle="tab">New</a></li>
				<li><a href="#list" data-toggle="tab">List</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
					<div class="container-fluid"> 
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('lista/'.$listadoEstudiante->cedula) }}" method="POST">
								@csrf
                                    {{ method_field('PATCH') }}
									@include('docente.listados.listadosForm')
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

@endsection 
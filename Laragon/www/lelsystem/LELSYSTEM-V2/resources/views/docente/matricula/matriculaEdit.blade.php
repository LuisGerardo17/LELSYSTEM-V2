@extends('docente.layouts.activitiesDoce')
@section('titulo','Materias')
@section('seccion')
<!-- Content page -->
<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Matricula <small>Estudiantes</small></h1>
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
                                <form action="{{ url('matricula/'.$matricula->cedula) }}" method="POST">
                                    @csrf
                                    {{ method_field('PATCH') }}
                                    @include('docente.matricula.matriculaForm')
                              </form>

                            </div>
						</div>
					</div>
				</div>

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

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
								<div class="form-group label-floating">
                                    <label class="control-label">Cedula</label>
                                    <input class="form-control" type="text" name="cedula" value="{{ isset($matricula) ? $matricula->cedula : old('cedula') }}" {{ isset($matri) ? 'disabled' : '' }}">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombres</label>
                                    <input class="form-control" type="text" name="nombres" value="{{ isset($matricula) ? $matricula->nombres : old('nombres') }}" {{ isset($matri) ? 'disabled' : '' }}">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Apellidos</label>
                                    <input class="form-control" type="text" name="apellidos" value="{{ isset($matricula) ? $matricula->apellidos : old('apellidos') }}" {{ isset($matri) ? 'disabled' : '' }}">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo</label>
                                    <input class="form-control" type="text" name="correo" value="{{ isset($matricula) ? $matricula->correo : old('correo') }}" {{ isset($matri) ? 'disabled' : '' }}">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre curso</label>
                                    <input class="form-control" type="text" name="nombre_curso" value="{{$matricula->nombre_curso}}">
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label"> Estado </label>
                                      <select class="form-select" name="estado"  value = "{{ $matricula->estado}}">
                                          <option value="Activo">Activo</option>
                                          <option value="Inactivo">Inactivo</option>
                                       </select>

                                 </div>
                                <p class="text-center">
                                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                </p>

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
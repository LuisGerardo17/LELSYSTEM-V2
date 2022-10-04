@extends('docente.layouts.layouts')
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
				<li class="active"><a href="#new" data-toggle="tab">Recursos</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('Rec/'.$datos->codigo_actividad) }}" method="POST">
									@csrf
									{{ method_field('PATCH') }}
									<div class="form-group label-floating">
										<label class="control-label">Codigo</label>
										<input class="form-control" type="text" name="codigo_recurso" value="{{ isset($datos) ? $datos->codigo_recurso : old('codigo_recurso') }}">
										@error('codigo_recurso')
										<p class="alertas">*{{$message}}</p>
										@enderror
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
										<input class="form-control" type="text" name="nombre_recurso" value="{{ isset($datos) ? $datos->nombre_recurso : old('nombre_recurso') }}">
										@error('nombre_recurso')
										<p class="alertas">*{{$message}}</p>
										@enderror
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Descripcion</label>
										<textarea class="form-control" name="descripcion">{{ isset($datos) ? $datos->descripcion : old('descripcion') }}</textarea>
										@error('descripcion')
										<p class="alertas">*{{$message}}</p>
										@enderror
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Tipo archivo</label>
										<select class="form-control" name="id_tipo_archivo">
											<option>tipo archivo-----</option>
											@foreach($forms as $form)
											<option value="{{ $form->id_tipo_archivo }}" {{(isset($datos) && $form->id_tipo_archivo==$datos->id_tipo_archivo) ? 'selected' : ''}}>{{ $form->tipo }}</option>
											@endforeach
										</select>
										@error('id_tipo_archivo')
										<p class="alertas">*{{$message}}</p>
										@enderror
									</div>
									<p class="text-center">
										<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
									</p>

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
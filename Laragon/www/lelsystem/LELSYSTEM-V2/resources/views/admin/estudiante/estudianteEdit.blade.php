@extends('admin.layouts.admin')

@section('titulo','Estudiante')
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
				<li><a href="">Volver</a></li>
				<li class="active"><a href="#new" data-toggle="tab">Editar</a></li>

			</ul>
			<div id="myTabContent" class="tab-content">



				<div class="tab-pane fade active in" id="edit">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('estudiante/estudiante/'.$student->cedula) }}" method="post" enctype="multipart/form-data">
									@csrf
									@method('PUT')

									<div class="form-group label-floating">
										<label class="control-label">Cédula</label>
										<input class="form-control" type="text" name="cedula" value="{{$student->cedula}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Nombres</label>
										<input class="form-control" type="text" name="nombres" value="{{$student->nombres}}">
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Apellidos</label>
										<input class="form-control" type="text" name="apellidos" value="{{$student->apellidos}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Correo</label>
										<input class="form-control" type="text" name="correo" value="{{$student->correo}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Dirección</label>
										<input class="form-control" type="text" name="direccion" value="{{$student->direccion}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Telefono</label>
										<input class="form-control" type="text" name="telefono" value="{{$student->telefono}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Contraseña</label>
										<input class="form-control" type="password" name="contrasena" value="{{$student->contrasena}}">
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Confirmar Contraseña</label>
										<input class="form-control" type="password" name="contrasena_verified_at" value="{{$student->contrasena_verified_at}}">
									</div>
									<div class="form-group">
										<div>
											<input type="text" readonly="" class="form-control" value="{{$student->imagen}}">
      										<input type="file" name="imagen">
										</div>
									</div>
									<p class="text-center">
										<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
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
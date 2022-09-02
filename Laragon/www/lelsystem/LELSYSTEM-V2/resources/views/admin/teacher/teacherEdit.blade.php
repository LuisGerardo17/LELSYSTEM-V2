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
				<li><a href="{{ Route('teacher') }}">Volver</a></li>
				<li class="active"><a href="#new" data-toggle="tab">Editar</a></li>

			</ul>
			<div id="myTabContent" class="tab-content">



				<div class="tab-pane fade active in" id="edit">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<form action="{{ url('Teacher/Teacher/{Teacher}.'/'.$items->cedula') }}" method="post" enctype="multipart/form-data">
									@csrf
									@method('PUT')
									<div class="form-group label-floating">
										<label class="control-label">Cédula</label>
										<input class="form-control" type="text" name="cedula" value='{{$items->cedula}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Nombres</label>
										<input class="form-control" type="text" name="nombres" value='{{$items->nombres}}'>
									</div>

									<div class="form-group label-floating">
										<label class="control-label">Apellidos</label>
										<input class="form-control" type="text" name="apellidos" value='{{$items->apellidos}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Correo</label>
										<input class="form-control" type="text" name="correo" value='{{$items->correo}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Dirección</label>
										<input class="form-control" type="text" name="direccion" value='{{$items->direccion}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Telefono</label>
										<input class="form-control" type="text" name="telefono" value='{{$items->telefono}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Contraseña</label>
										<input class="form-control" type="password" name="contrasena" value='{{$items->contrasena}}'>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Confirmar Contraseña</label>
										<input class="form-control" type="password" name="contrasena_verified_at" value='{{$items->contrasena_verified_at}}'>
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
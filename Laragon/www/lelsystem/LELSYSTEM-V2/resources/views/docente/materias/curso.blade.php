@extends('docente.layouts.layouts')

@section('titulo','Admin')
@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i>  Cursos <small>Teacher-Means</small></h1>
			</div>
			<p class="lead">Los cursos de aprendizaje presentan muchas ventajas en la educación virtual.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					    <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
					  	<li><a href="#new" data-toggle="tab">Agregar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade {{ ($errors->any()) ? 'active in' : '' }}" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">

									</div>
								</div>
							</div>
						</div>
                        <x:notify-messages/>
					  	<div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center w-8">
									<thead>
										<tr>

											<th class="text-center">Nombre</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Fecha de  Inicio</th>
                                            <th class="text-center">Fecha de Finalización</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Cedula Docente</th>
                                            <th class="text-center">Imagen</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach( $cursos as $curso )
                                            <tr>

                                                <td>{{ $curso->nombre_curso }}</td>
                                                <td style="max-width: 10px; overflow: hidden;">{{ $curso->descripcion }}</td>
                                                <td>{{ $curso->fecha_inicio }}</td>
                                                <td>{{ $curso->fecha_fin }}</td>
                                                <td>{{ $curso->estado}}</td>
                                                <td>{{ $curso->cedula }}</td>
                                                <td><img src="{{ asset('storage').'/'.$curso->imagen }}" alt="" width="40px"></td>
                                                <td><a href="{{ url('Cursos') .'/'.$curso->nombre_curso. '/edit' }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td>
                                                    <form action="{{ url('Cursos'.$curso->nombre_curso) }}" method="post" class="Eliminar">
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
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

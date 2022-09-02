@extends('admin.layouts.admin')

@section('titulo','Teacher')
@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i>  Docente-Recursos <small>Teacher-Means</small></h1>
			</div>
			<p class="lead">Los recursos de aprendizaje presentan muchas ventajas en la educación virtual, algunos de ellos son: la múltiple variedad de presentación multimedia en formatos animados; la facilidad para acercar al estudiante a la comprensión de procesos y acceso al mundo real; dar la oportunidad de proveer un aprendizaje al ritmo del estudiante; entre otros.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					    <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
					  	<li><a href="#new" data-toggle="tab">Agregar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade " id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('admin/recursos') }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            @include('admin.recursos.recursosForm')


									    </form>
									</div>
								</div>
							</div>
						</div>
                        <x:notify-messages/>
					  	<div class="tab-pane fade active in" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center w-8">
									<thead>
										<tr>
											<th class="text-center">Codigo</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Descripcion</th>
											<th class="text-center">Tipo archivo</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach( $recursos as $recurso )
                                            <tr>
                                                <td>{{ $recurso->codigo_recurso }}</td>
                                                <td>{{ $recurso->nombre_recurso }}</td>
                                                <td style="max-width: 10px; overflow: hidden;">{{ $recurso->descripcion }}</td>
                                                <td>{{ $recurso->tipo->tipo }}</td>
                                                <td><a href="{{ url('admin/recursos/'.$recurso->codigo_recurso.'/edit') }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td>
                                                    <form action="{{ url('admin/recursos'.'/'.$recurso->codigo_recurso) }}" method="post" class="Eliminar">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"><a class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
										
									</tbody>
								</table>
								{!! $recursos->links() !!}
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

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
					    <li class="active"><a href="#list" data-toggle="tab">Recursos</a></li>
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
                                                <td><a href="{{ url('Rec/').'/'.$recurso->codigo_recurso.'/edit' }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                <td>
                                                    <form action="{{ url('Rec'.'/'.$recurso->codigo_recurso) }}" method="post" class="Eliminar">
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
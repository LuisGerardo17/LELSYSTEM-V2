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
                        <li><a href="{{ url('admin/recursos') }}" >Volver</a></li>
                        <li class="active"><a href="#new" data-toggle="tab">Editar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('admin/recursos/'.$datos->codigo_recurso) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH') }}
                                            @include('admin.recursos.recursosForm')


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
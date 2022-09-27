@extends('admin.layouts.admin')
@section('titulo','Admin')
@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrador <small>Administrador</small></h1>
			</div>
			<p class="lead">Un administrador es una persona con visión, que es capaz de aplicar y desarrollar todos los conocimientos acerca de la planeación, organización, dirección y control empresarial, donde sus objetivos están en la misma dirección de las metas y propósitos de la institución.</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li><a href="{{ url('admin/admin') }}" >Volver</a></li>
					  	<li class="active"><a href="#new" data-toggle="tab">Editar</a></li>

					</ul>
					<div id="myTabContent" class="tab-content">
                 <div class="tab-pane fade active in" id="edit">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('admin/admin/'.$admin->cedula) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH') }}
									    	@include('admin.admin.adminForm')
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

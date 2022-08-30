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
									    <form action="">
									    	@include('admin.teacher.teacherForm')
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

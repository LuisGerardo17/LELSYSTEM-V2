v
@extends('admin.layouts.admin')
@section('titulo','Configuracion')
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
                        <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
					  	<li><a href="#new" data-toggle="tab">Agregar</a></li>

					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade {{ ($errors->any()) ? 'active in':'' }}" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="{{ url('/configuracion') }}" method="post" enctype="multipart/form-data">
                                            @csrf
									    	@include('admin.configuracion.configForm')
									    </form>

									</div>
								</div>
							</div>
						</div>

                        <x:notify-messages/>
					  	<div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
                                            <th class="text-center">Titulo</th>
                                            <th class="text-center">Descripcion</th>
                                            <th class="text-center">Imagen</th>
											<th class="text-center">Logo</th>
											<th class="text-center">Slogan</th>
                                            <th class="text-center">Frase1</th>
                                            <th class="text-center">Frase2</th>
                                            <th class="text-center">Frase3</th>
											<th class="text-center">Razon Social</th>
                                            <th class="text-center">Celular</th>
											<th class="text-center">Telefono</th>
                                            <th class="text-center">Dirección</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Facebooh</th>
                                            <th class="text-center">Youtube</th>
											<th class="text-center">Update</th>

										</tr>
									</thead>
									<tbody>
                                        @foreach($registro as $admin)
                                            <tr>
                                                <td>{{ $admin->titulo }}</td>
                                                <td>{{ $admin->descripcion }}</td>
                                                <td><img src="{{ asset('storage').'/'.$admin->imagen }}" alt="" width="40px"></td>
                                                <td><img src="{{ asset('storage').'/'.$admin->logo }}" alt="" width="40px"></td>
                                                <td>{{ $admin->slogan }}</td>
                                                <td>{{ $admin->frase1}}</td>
                                                <td>{{ $admin->frase2}}</td>
                                                <td>{{ $admin->frase3}}</td>
                                                <td>{{ $admin->razonsocial}}</td>
                                                <td>{{ $admin->celular}}</td>
                                                <td>{{ $admin->telefono }}</td>
                                                <td>{{ $admin->direccion}}</td>
                                                <td>{{ $admin->email}}</td>
                                                <td>{{ $admin->facebook}}</td>
                                                <td>{{ $admin->youtube}}</td>

                                                <td>
                                                    <a href="{{ url('/configuracion'. $admin->id .'/edit') }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


									</tbody>
								</table>
								{!! $registros->links() !!}
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@php
    Session::forget('session')
@endphp
@endsection

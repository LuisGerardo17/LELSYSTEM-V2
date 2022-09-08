@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')
   
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				lealsystem <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">

				<figure class="full-box">

					<img src="{{ asset('admin/assets/img/avatar.jpg') }}" alt="UserIcon">

				</figure>


				<ul class="full-box list-unstyled text-center">

					<li>
						<a href="{{route('login.destroy')}}" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div> 
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Cursos
					</a>
				</li>
                <li>
					<a href="arte.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-folder zmdi-hc-fw"></i> Arte Culinario 
					</a>
				</li>
				<li>
					<a href="artelist.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Lista Estudiantes 
					</a>
				</li>
				<li>
					<a href="artemat.html" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-font zmdi-hc-fw"></i> Matriculas 
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-n-1-square zmdi-hc-fw"></i> Notas 
					</a>
					
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<section class="full-box dashboard-contentPage" >
		<!--fondo arreglar-->
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar ">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">4</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
	<!-- Content page -->

    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Matricula <small>Estudiantes</small></h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>
                      <li><a href="#new" data-toggle="tab">Agregar</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="new">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <form>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Codigo Matricula</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Codigo Curso</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Cedula</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <br>
                                          <div>
                                              Actividad <br>
                                              <input  name="act" type="radio">
                                              <label>Activa</label>
                                              <input  name="act" type="radio">
                                              <label>Inactiva</label>
                                          </div>
                                          <p class="text-center">
                                              <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                          </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="tab-pane fade active in" id="list">
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Cedula</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9999999999</td>
                                    <td>Enrique Sebastian</td>
                                    <td>Mera Yela</td>
                                    <td>esy.mera@yavirac.edu.ec</td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                <tr>
                                    <td>9999999999</td>
                                    <td>Anshelo Alejandro</td>
                                    <td>Proaño Lema</td>
                                    <td>aal.proano@yavirac.edu.ec</td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                
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
	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
@endsection
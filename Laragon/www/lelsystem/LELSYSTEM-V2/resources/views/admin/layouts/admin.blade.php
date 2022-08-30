<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @notifyCss
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

</head>



<body>







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
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">

					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="{{ Route('adminHome') }}">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
                <li>
                    <a href="{{ url('admin/admin') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrar Admin</a>
                </li>
                <li>
                    <a href="{{ url('admin/teacher') }}"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Administrar docente</a>
                </li>
                <li>
                    <a href="{{ Route('activities') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Administrar actividad</a>
                </li>
                <li>
                    <a href="{{ Route('curse') }}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Administrar curso</a>
                </li>
                <li>
                    <a href="{{ Route('recourses') }}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Administrar Recursos</a>
                </li>


			</ul>
		</div>
	</section>
    <section class="full-box dashboard-contentPage"><!--fondo arreglar-->
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar ">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
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

        @yield('contenido')

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
				      	<div class="least-content">3m</div>
				      	<h4 class="list-group-item-heading">INGLES Yavirac.</h4>
				      	<p class="list-group-item-text">ACTUALIZACION ASIGNADA</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Canva</h4>
				      	<p class="list-group-item-text">Gana un premio con un diseño deslumbrante.</p>
				      	<p class="list-group-item-text">#CanvaDesignChallenge.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">27m</div>
				      	<h4 class="list-group-item-heading">evaluacionc</h4>
				      	<p class="list-group-item-text">EVALUACION DOCENTE.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Google</h4>
				      	<p class="list-group-item-text">Alerta de seguridad.</p>
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
                  <h4 class="modal-title">Ayuda</h4>
              </div>
              <div class="modal-body">
                  <p>
                      Si tienes problemas con la plataforma o aparecen errores permanentes, por favor contactarse con el administrador para poder solucionarlo, para contactarse presione en el siguiente link.
                  </p>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
                </div>
          </div>
        </div>
  </div>
<!--====== Scripts -->
    <script src="{{ asset('admin/js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/material.min.js') }}"></script>
	<script src="{{ asset('admin/js/ripples.min.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
	<script>
		$.material.init();
	</script>
@notifyJs

</body>
</html>

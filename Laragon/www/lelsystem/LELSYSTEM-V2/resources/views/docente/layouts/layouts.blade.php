<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<style>
.titulo{
	margin: 1% 0 0 0;
	padding: 0;
	color: white;
}

</style>
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

					<img src="{{  asset('storage').'/'.session()->get('datos')['img'] }}" alt="UserIcon">

				</figure>
                <center><div class="text-uppercase"><p>{{ session()->get('datos')['nombres'].' '.session()->get('datos')['apellidos'] }}</p></div></center>

               <ul class="full-box list-unstyled text-center">

					<li>
                        <a href="#" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->

			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
                <li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-folder zmdi-hc-fw"></i> Cursos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
                            <a href="{{url('ActividadDoc')}}"><i class="zmdi zmdi-font zmdi-hc-fw"></i> ARTE CULINARIO</a>
						</li>
						<li>
							<a href="#"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Programacion</a>
						</li>
                        <li>
							<a href="#"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Desarrollo del pensamiento</a>
						</li>
                        <li>
							<a href="#"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Mecanica</a>
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

        @yield('seccion')



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
    </body>
    </html>

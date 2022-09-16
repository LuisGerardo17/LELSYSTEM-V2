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
.dashboard-contentPage{
	padding-left: 0;
}

</style>
<body>


	<section class="full-box dashboard-contentPage" style="background-color: rgb(173, 173, 173)" >
		<!--fondo arreglar-->
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar ">
			<ul class="full-box list-unstyled text-right">
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

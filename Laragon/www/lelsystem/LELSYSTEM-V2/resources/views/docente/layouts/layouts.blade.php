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
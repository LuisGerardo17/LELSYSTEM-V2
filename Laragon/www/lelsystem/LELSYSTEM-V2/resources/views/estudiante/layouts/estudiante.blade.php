
<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>

<style>
.dashboard-contentPage{
	right: 0;
	z-index: 0;
	padding-left: 0px;
}
.tile{
    width: 300px;
	height: 450px;

}
.tile-icon{
	bottom: 0;
	height: 400px;
	width: 300px;
}
h4 {
    color: #000;
    text-align: center;
    padding-bottom: 10px;
}
p{
    color: #000;
}
.sup {
    padding-bottom: 20px;
}
.img {
    padding: 5px;
    border-radius: 20px 0;
}
.dashboard-Navbar{
	background-color: #009688;
	overflow: hidden;
}

/*menu*/
.Navbar-superior{
	width: 100%;
	background: #009688;
	padding: 1em;
}
.logoEmpresa{
	background: #fff;
	border-radius: 10%;
}
.avatar{
	float: right;
}
.a{
	color: #fff;
}
.a:hover{
    color: #009688;
    text-decoration: none;
}
button{
	background: transparent;
	color: #fff;
	border: none;
	font-size: 22px;
	float: right;
	padding-bottom: 10px;
}
.nav{
	color: #fff;
	float: right;
	display: none;
	position: relative;
    top: 45px;
	left: 13%;
}
.activo{
	display: block;
}
.ul{
	background: rgba(0, 0, 0, 0.788);
    padding: 0 40px;
}
.li{
	margin: .5em 0;
    list-style: none;
}
.center{
    display: flex;
    align-items: center;
    height: 80px;
}
.overlay{
	background: rgba(0, 0, 0, 0.856);
	left: 0;
}
</style>
<body>


	<!-- menu-->
	<section class="full-box dashboard-contentPage" style="background-color: @yield('fondo')">

		<div class="Navbar-superior">
		    <img class="logoEmpresa img" width="150px" src="{{ asset('static/img/logo5.png') }}" alt="">
			<img  class="avatar img" width="100px" src="{{ asset('admin/assets/img/avatar.jpg') }}" alt="">

			<button id="button" class="center">
			    <div>NOMBRE ESTUDIANTE</div> <i class="zmdi-hc-fw zmdi zmdi-caret-down"></i>
			</button>

			<nav class="nav" id="nav">
			    <ul class="ul" >
				    <li class="li">
						<a class="a" href="#">Area personal</a>
					</li>
				    <li class="li">
						<a class="a" href="#">Cerrar sección</a>
					</li>
			    </ul>
			</nav>
		</div>

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
				let subirArven=document.getElementById('subirArven'),
				subirArven2 = document.getElementById("subirArven2"),
				subirAr = document.querySelector("#subirAr"),
				btnCerrarPopup = document.querySelector('#btn-cerrar-popup')
	            const button = document.querySelector('#button')
	            const nav    = document.querySelector('#nav')

				button.addEventListener('click', ()=>{
		        nav.classList.toggle('activo')
	        	})
				subirAr.addEventListener("click", function(){
					subirArven.classList.add("active");
					subirArven2.classList.add("active");
				});
				btnCerrarPopup.addEventListener("click", function(){
					subirArven.classList.remove("active");
        		});

            </script>
    </body>
    </html>


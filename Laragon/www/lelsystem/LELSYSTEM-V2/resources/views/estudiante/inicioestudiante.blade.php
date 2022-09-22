<!DOCTYPE html>
<html lang="es">
<head>
	<title>A</title>
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
img {
    padding: 5px;
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
	padding: 20px;
}
.a:hover{
	color: #fff;
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
    top: 40px;
	left: 13%;
    
}
.activo{
	display: block;
}
.ul{
	background: #000;
	list-style-type: none;
	padding: 7px;
}
.li{
	margin-top: 20px;
	margin-bottom: 20px;
}

</style>
<body>
	

	<!-- menu-->
	<section class="full-box dashboard-contentPage">
	        
		<div class="Navbar-superior">
		    <img class="logoEmpresa" width="150px" src="{{ asset('static/img/logo5.png') }}" alt="">
			<img  class="avatar" width="100px" src="{{ asset('admin/assets/img/avatar.jpg') }}" alt="">
			<button id="button">
			    NOMBRE ESTUDIANTE<i class="zmdi-hc-fw zmdi zmdi-caret-down"></i>
			</button>
			<nav class="nav" id="nav">
			    <ul class="ul" >
				    <li class="li">
						<a class="a" href="#"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Area personal</a>
					</li>
					<li class="li">
						<a class="a" href="#"><i class="zmdi zmdi-settings zmdi-hc-fw"></i> Configuración</a>
					</li>
				    <li class="li">
						<a class="a" href="#"><i class="zmdi zmdi-long-arrow-tab zmdi-hc-fw"></i> Cerrar seción</a>
					</li>
			    </ul>
			</nav>	
		</div>
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header text-center">
			  <h1 class="text-titles"><b>Cursos</b></h1>
			</div>
		</div>

		<div class="full-box text-center" >
		<a href="#">
			<article class="full-box tile">
				<div  class="full-box tile-title text-center text-titles text-uppercase">
					Arte Culinario
				</div>
				<div class="full-box tile-icon text-center">
                    <h4>Ing. Anshelo Proaño</h4> 
                    <img class="sup" width="90%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="arte">
                    <img width="12%" src="{{ asset('admin/assets/img/what.png') }}"><a href="#" class="ic">+593 999999999</a> <br><br>
                    <img width="12%" src="{{ asset('admin/assets/img/gmail.png') }}"><a href="#" class="ic">aal.proano@yavirac.edu.ec</a>
                </div>
			</article>
		</a>
		<a href="#">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					control de incendios
				</div>
				<div class="full-box tile-icon text-center">
                    <h4>Ing. Anshelo Proaño</h4> 
                    <img class="sup" width="90%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="arte">
                    <img width="12%" src="{{ asset('admin/assets/img/what.png') }}"><a href="#" class="ic">+593 999999999</a> <br><br>
                    <img width="12%" src="{{ asset('admin/assets/img/gmail.png') }}"><a href="#" class="ic">aal.proano@yavirac.edu.ec</a>
				</div>
			</article>
			
		</a>
		<a href="#">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					desarrollo de software
				</div>
				<div class="full-box tile-icon text-center">
                    <h4>Ing. Anshelo Proaño</h4> 
                    <img class="sup" width="90%" src="{{ asset('admin/assets/img/img.jpg') }}" alt="arte">
                    <img width="12%" src="{{ asset('admin/assets/img/what.png') }}"><a href="#" class="ic">+593 999999999</a> <br><br>
                    <img width="12%" src="{{ asset('admin/assets/img/gmail.png') }}"><a href="#" class="ic">aal.proano@yavirac.edu.ec</a>
				</div>
			</article>
		</a>
		</div>
		
	<!-- NavBar -->
	<nav class="full-box dashboard-Navbar">
			<div class="full-box text-center text-uppercase">
                <h3 class="titulo">BIENVENIDO ESTUDIANTE</h3>
			</div>
		</nav>

		<script>
	        const button = document.querySelector('#button')
	        const nav    = document.querySelector('#nav')

	        button.addEventListener('click', ()=>{
		    nav.classList.toggle('activo')
	        })
        </script>
    </body>
    
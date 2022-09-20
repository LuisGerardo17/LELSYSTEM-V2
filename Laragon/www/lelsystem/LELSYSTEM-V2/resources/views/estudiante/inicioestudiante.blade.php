@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(233, 233, 233)')
@section('titulo', 'Index')
@section('seccion')

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

	<!-- NavBar
	<nav class="full-box dashboard-Navbar">
			<div class="full-box text-center text-uppercase">
                <h3 class="titulo">BIENVENIDO ESTUDIANTE</h3>
			</div>
		</nav>-->
@endsection


@extends('docente.layouts.layouts')
@section('titulo', 'Docente')
@section('seccion')
		<!-- Content page -->
		<div class="container-fluid">
            <div class="full-box text-center text-uppercase">
                <h3></h3>
			</div>
			<div class="page-header text-center">
			  <h1 class="text-titles"><b>Mis Cursos</b></h1>
			</div>
		</div>

		<div class="full-box text-center" >
		<a href="{{url('ActividadDoc')}}">
			<article class="full-box tile">
				<div  class="full-box tile-title text-center text-titles text-uppercase">
					Arte Culinario
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%"  src="{{ asset('admin/assets/img/artc.jpg') }}" alt="arte">
				</div>
			</article>
		</a>
		<a href="{{url('informatica')}}">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Informática
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/informatica.jpg') }}" alt="control">
				</div>
			</article>
		</a>
		<a href="{{url('mecanica')}}">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Mecánica
				</div>
				<div class="full-box tile-icon text-center">
					<img width="200%" src="{{ asset('admin/assets/img/mecanica.jpg') }}" alt="desarrollo">
				</div>
			</article>
		</a>
		</div>
    @endsection

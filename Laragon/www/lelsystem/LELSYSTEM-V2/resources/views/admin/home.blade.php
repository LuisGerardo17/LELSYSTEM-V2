@extends('admin.layouts.admin')

@section('titulo','Inicio')

@section('contenido')
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Sistema <small>admin</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
            <a href="{{ url('admin/admin') }}">
			    <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Admins
                    </div>
                    @php
                        use App\Models\Administradores;
                        $admins=Administradores::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $admins }}</p>
                        <small>Registros</small>
                    </div>

			    </article>
            </a>
            <a href="">
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Docentes
                    </div>
                    @php
                        use App\Models\Docentes;
                        $docentes=Docentes::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-male-alt"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $docentes }}</p>
                        <small>Registros</small>
                    </div>
                </article>
            </a>
            <a href="">
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Estudiantes
                    </div>
                    @php
                        use App\Models\Estudiantes;
                        $estudiante=Estudiantes::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-face"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $estudiante }}</p>
                        <small>Registros</small>
                    </div>
                </article>
            </a>
            <a href="">
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Cursos
                    </div>
                    @php
                        use App\Models\Cursos;
                        $cursos=Cursos::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $cursos }}</p>
                        <small>Registros</small>
                    </div>
                </article>
            </a>
            <a href="{{ url('admin/recursos') }}">
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Recursos
                    </div>
                    @php
                        use App\Models\Recursos;
                        $recursos=Recursos::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-font zmdi-hc-fw"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $recursos }}</p>
                        <small>Registros</small>
                    </div>
                </article>
            </a>
            <a href="">
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Actividades
                    </div>
                    @php
                        use App\Models\Actividades;
                        $actividades=Actividades::count();
                    @endphp
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-book zmdi-hc-fw"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">{{ $actividades }}</p>
                        <small>Registros</small>
                    </div>
                </article>
            </a>
		</div>
	</section>
@endsection


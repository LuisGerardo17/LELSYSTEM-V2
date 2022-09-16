@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles titulo">ARTE CULINARIO</h1>
		    </div>
            <a class="edit" id="edit"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>Editar</a>
            <div class="imagenPresentacion">
                <img src="{{ asset('admin/assets/img/img.jpg') }}" alt="">
            </div>
            <div class="espacio">
                <div class="row">
                    <h2>Descripccion</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur similique doloremque dignissimos molestiae? Sed veniam quaerat nostrum, reiciendis quos eius deleniti. Ex optio labore nemo dignissimos nesciunt harum qui architecto?</p>
                    <h2>Datos personales</h2>
                </div>
                <center>
                    <div class="row espacio flex">
                        <div class="col espacio2">
                            <h3 class="text-center">Foto</h3>
                            <img src="{{ asset('admin/assets/img/img.jpg') }}" width="250px" alt="">
                        </div>
                        <div class="col espacio2">
                            <h3 class="text-center">Nombre</h3>
                            <p>Enrique Sebastian Mera Yela</p>
                        </div>
                        <div class="col espacio2">
                            <h3 class="text-center">Telefono</h3>
                            <p>+548 888 8888</p>
                        </div>
                    </div>
                </center>

            </div>
           

            <div>
                <h2 class="titulo">Parcial 1</h2>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p>Lorem </p></a>
                        </div>
                    </div>
                </div>
                <a class="edit" id="actividadUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Actividades</h3>
                    <div class="flex2">
                    @foreach ($actividad as $item)
                        <div class="campos">
                            <a class="link" href=""><p>{{$item->nombre_actividad}}</p></a>
                        </div>
					@endforeach
                    </div>
                </div>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p>Lorem </p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 2</h2>
                <a class="edit" id="parcialDos"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p>Lorem </p></a>
                        </div>

                    </div>
                </div>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <div class="flex2">
                    @foreach ($actividad as $item)
                        <div class="campos">
                            <a class="link" href=""><p>{{$item->nombre_actividad}}</p></a>
                        </div>
					@endforeach

                    </div>
                </div>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p>Lorem </p></a>
                        </div>

                    </div>
                </div>
            </div>
		</div>


        <!-- form emerge -->
            @include("docente.materias.formsEmerge")

@endsection

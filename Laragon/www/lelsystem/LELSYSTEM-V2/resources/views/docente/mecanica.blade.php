@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles titulo">MECÁNICA</h1>
		    </div>
            <a class="edit" id="edit"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>Editar</a>
            <div class="imagenPresentacion">
                <img src="{{ asset('admin/assets/img/mecanica.jpg') }}" alt="">
            </div>
            <div class="espacio">
                <div class="row">
                    <h2>Descripccion</h2>
                    <p>Mecánica Automatriz</p>

                </div>
                <center>
                    <div class="row espacio flex">

                        <div class="col espacio3">
                            <h3 class="text-center">Fecha de Inicio</h3>
                            <h4>3 de Coctubre del 2022 </h4>
                            </div>
                            <div class="col espacio3">
                            <h3 class="text-center">Fecha de Finalización</h3>
                            <h4> 3 de Diciembre del 2022</h4>
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
                            <a class="link" href=""><p></p></a>
                        </div>
                    <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>
                    </div>
                </div>
                <a class="edit" id="parcialDos"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Actividades</h3>
                    <div class="flex2">
                        <div class="campos">
                        <a class="link" href=""><p></p></a>
                        </div>
                    </div>
                </div>
                <a class="edit" id="parcialTres"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 2</h2>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>
                    <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>
                    </div>
                </div>
                <a class="edit" id="parcialDos"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <div class="flex2">
                        <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>


                    </div>
                </div>
                <a class="edit" id="parcialTres"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">

                        <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>





                    </div>
                </div>
            </div>
		</div>


        <!-- form emerge -->
            @include("docente.materias.formsEmerge")

@endsection

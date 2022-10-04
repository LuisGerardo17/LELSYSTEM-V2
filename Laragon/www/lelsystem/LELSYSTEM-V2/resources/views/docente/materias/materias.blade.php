@extends('docente.layouts.layouts')
@section('titulo', 'Materias')
@section('seccion')

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">

                        <div class="campos">
                            <a class="link" href=""><p></p></a>
                        </div>

			 <h1 class="text-titles titulo">ARTE CULINARIO</h1>
		    </div>
            <a class="edit" id="parcialDos" href="{{url('Cursos')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>

            <div class="imagenPresentacion">
                <img src="{{ asset('admin/assets/img/img.jpg') }}"  class="img-fluid">
            </div>
            <div class="espacio">
                <div class="row">
                    <h2>Descripccion</h2>
                    <p> Cocina tradicinal y ecuatoriana</p>

                </div>
                <center>
                    <div class="row espacio flex">
                        <div class="col espacio2">
                            <h3 class="text-center">Foto</h3>
                            <img src="{{ asset('admin/assets/img/img.jpg') }}" width="250px" alt="">
                        </div>

                         <div class="col espacio3">
                            <h3 class="text-center">Fecha de Inicio</h3>
                            <h4>3 de Coctubre del 2022 </h4>
                       </div>
                       <div class="col espacio3">
                        <h3 class="text-center">Fecha de Finalización</h3>
                        <h4> 3 de Diciembre del 2022</h4>
                   </div>
                    </div>
                </center>

            </div>

            <div>
                <h2 class="titulo">Parcial 1</h2>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Rec')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                <div class="flex2">
                    @foreach ($recursos as $rec)
                        <div class="campos">
                            <a class="link" href=""><p>{{$rec->nombre_recurso}}</p></a>
                        </div>
					@endforeach
                    @foreach ($forms as $form)
                    <div class="campos">
                            <a class="link" href=""><p>{{$form->tipo}}</p></a>
                     </div>
					@endforeach
                </div>
             </div>
                <a class="edit" id="parcialCuatro"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Act')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
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
                <a class="edit" id="parcialTres"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Examen')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">
                    @foreach ($examen as $item)
                        <div class="campos">
                            <a class="link" href=""><p>{{$item->nombre_examen}}</p></a>
                        </div>
					@endforeach
                    </div>
                </div>
            </div>


            <div>
                <h2 class="titulo">Parcial 2</h2>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Rec')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <div class="flex2">
                    @foreach ($recursos as $rec)
                        <div class="campos">
                            <a class="link" href=""><p>{{$rec->nombre_recurso}}</p></a>
                        </div>
					@endforeach
                    @foreach ($forms as $form)
                    <div class="campos">
                            <a class="link" href=""><p>{{$form->tipo}}</p></a>
                        </div>
					@endforeach
                    </div>
                </div>
                <a class="edit" id="parcialDos"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Act')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
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
                <a class="edit" id="parcialTres"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <a class="edit" id="parcialDos" href="{{url('Examen')}}"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Editar</a>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <div class="flex2">
                    @foreach ($examen as $item)
                        <div class="campos">
                            <a class="link" href=""><p>{{$item->nombre_examen}}</p></a>
                        </div>
					@endforeach
                    </div>
                </div>
            </div>
		</div>


        <!-- form emerge -->
            @include("docente.materias.formsEmerge")

@endsection

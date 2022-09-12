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
                <div class="row espacio flex">
                    <div class="col espacio2">
                        <h3 class="text-center">Foto</h3>
                        <img src="{{ asset('admin/assets/img/img.jpg') }}" width="250px" alt="">
                    </div>
                    <div class="col espacio2">
                        <h3 class="text-center">Nombre</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo in praesentium, accusamus iste dolorem est placeat atque, sit animi doloribus corrupti perspiciatis asperiores ea laborum unde eos quos nisi a.</p>
                    </div>
                    <div class="col espacio2">
                        <h3 class="text-center">Telefono</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo in praesentium, accusamus iste dolorem est placeat atque, sit animi doloribus corrupti perspiciatis asperiores ea laborum unde eos quos nisi a.</p>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 1</h2>
                <a class="edit" id="parcialUno"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                </div>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo libero blanditiis illum molestiae dolor ullam accusamus error modi fugit, tenetur iusto consectetur reprehenderit laborum explicabo repudiandae aperiam quod debitis.</p>
                </div>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ducimus ut culpa, tempore eos porro nam excepturi dolores vel, eligendi, ab aut neque cupiditate corporis perferendis atque ex voluptatem nemo?</p>
                </div>
            </div>
            <div>
                <h2 class="titulo">Parcial 2</h2>
                <a class="edit" id="parcialDos"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Añadir</a>
                <div class="row espacio">
                    <h3>Recursos</h3>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                    <a class="link" href=""><p>Lorem </p></a>
                </div>
                <div class="row espacio">
                    <h3>Deberes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio doloremque voluptas, nesciunt in illum, incidunt recusandae, consequatur ut molestiae excepturi? Vel voluptatibus eos libero aliquid maxime porro doloremque odit.</p>
                </div>
                <div class="row espacio">
                    <h3>Examenes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio doloremque voluptas, nesciunt in illum, incidunt recusandae, consequatur ut molestiae excepturi? Vel voluptatibus eos libero aliquid maxime porro doloremque odit.</p>
                </div>
            </div>
		</div>


        <!-- form emerge -->
            @include("docente.materias.formsEmerge")

@endsection

@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(173, 173, 173)')
@section('titulo','recurso')
@section('seccion')
<div class="container partes">
    <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">nombre curso</a></li>
    <li class="active">nombredeber</li>
    </ol>
   
    <h3 class="bacgraun"><center><b>Titulo del recurso</b></center> </h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nihil aut commodi rerum officia impedit molestias quisquam eos deserunt tempore, odio in accusantium id deleniti ab. Molestiae error tenetur dolores?</p>
    <div class="table-responsive estado">
        <iframe src="https://es.wikipedia.org/wiki/Ecuador" frameborder="0" width="200%"></iframe>
    </div>
    <div class="botonmas">
        <button id="subirAr" class="btn btn-primary btn-raised"><i class="zmdi zmdi-long-arrow-left"></i><span>volver</span></button>
    </div>

</div>

@endsection
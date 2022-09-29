@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(173, 173, 173)')
@section('titulo','recurso')
@section('seccion')

<div class="container" style="background-color: white;">
    <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">nombre curso</a></li>
    <li class="active">nombredeber</li>
    </ol>
   
    <h3 class="bacgraun"><center><b>Titulo del recurso</b></center> </h3>
    <br>
    <br>
    <!--https://www.youtube.com/embed/..-->
    <center><iframe src="https://www.youtube.com/embed/PGQxIILBb7M" width="90%" height="500"></iframe></center>
    <div class="botonmas">
        <a href="www.google.com"><button class="btn btn-primary btn-raised"><i class="zmdi zmdi-long-arrow-left"></i><span>volver</span></button></a>
    </div>

</div>

@endsection
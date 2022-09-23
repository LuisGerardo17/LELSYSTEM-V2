@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(173, 173, 173)')
@section('titulo', 'Materias')
@section('seccion')
<div class="container partes">
    <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">nombre curso</a></li>
    <li class="active">nombredeber</li>
    </ol>
    <center><h1 class="text-uppercase">Nombre del deber</h1></center>
    <h3>Descripccion</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nihil aut commodi rerum officia impedit molestias quisquam eos deserunt tempore, odio in accusantium id deleniti ab. Molestiae error tenetur dolores?</p>
    <h3 class="bacgraun"><center><b>Estado de envio</b></center> </h3>
    <div class="table-responsive estado">
        <table class="table table-hover text-center">
            <tbody>
                <tr>
                    <th><center>Estado de envio</center></th>
                    <td>999999999</td>
                </tr>
                <tr>
                    <th><center>Estado de calificacion</center></th>
                    <td>999999999</td>
                </tr>
                <tr>
                    <th><center>Calificación</center></th>
                    <td>999999999</td>
                </tr>
                <tr>
                    <th><center>tiempo restante</center></th>
                    <td>999999999</td>
                </tr>
                <tr>
                    <th><center>Nombre Archivo</center></th>
                    <td>999999999</td>
                </tr>           
            </tbody>
        </table>
    </div>
    <div class="botonmas">
        <button id="subirAr" class="btn btn-success btn-raised"><i class="zmdi zmdi-upload"></i><span>cargar deber</span></button>
    </div>

</div>

<div class="overlay" id="subirArven">
    <div class="popup" id="subirArven2">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
        <center><h1 class="text-uppercase" style="color: white; ">Nombre del deber</h1></center>

        <p style="color: white; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nihil aut commodi rerum officia impedit molestias quisquam eos deserunt tempore, odio in accusantium id deleniti ab. Molestiae error tenetur dolores?</p>
        <form action="{{ url('ActividadDoc')}}" method="POST">
        @csrf 
        <div class="form-group">
            <div>
              <input type="text" readonly="" class="form-control" placeholder="archivo...">
              <input type="file" name="imagen" >
             
            </div>
          </div>
            <center><input type="submit" class="btn-submit" value="CARGAR"></center>
        </form>
    </div>
</div> 

@endsection

@extends('estudiante.layouts.estudiante')
@section('fondo','rgb(233, 233, 233)')
@section('titulo', 'Index')
@section('seccion')
<div class="container partes" style="background-color: white;">
    <ol class="breadcrumb">
		<li><a href="#">Home</a></li>
        <li><a href="#">nombre del curso</a></li>
		<li class="active">Asistencias</li>
	</ol>
    <div class="container-fluid">
        <div class="page-header text-center">
          <h1 class="text-titles"><b>Asistencias</b></h1>
        </div>
    </div>
    <div class="tab-pane ">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="">10/20/2001</a> </td>
                        <td class="aprobado">presente</td>
            
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="">10/20/2001</a> </td>
                        <td class="aprobado">Presente</td>
                       
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="">10/20/2001</a> </td>
                        <td class="reprobado">Falta</td>
                        
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="">10/20/2001</a> </td>
                        <td class="justificado">Justificado</td>
                        
                    </tr>
                </tbody>
            </table>
            <ul class="pagination pagination-sm">
                  <li class="disabled"><a href="#!">«</a></li>
                  <li class="active"><a href="#!">1</a></li>
                  <li><a href="#!">2</a></li>
                  <li><a href="#!">3</a></li>
                  <li><a href="#!">4</a></li>
                  <li><a href="#!">5</a></li>
                  <li><a href="#!">»</a></li>
            </ul>
        </div>
      </div>
</div>

	
@endsection


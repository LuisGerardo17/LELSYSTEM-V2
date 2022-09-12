@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

	<!-- Content page -->

    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Matrícula <small>Estudiantes</small></h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#list" data-toggle="tab">Lista de Matricula</a></li>
                      <li><a href="#new" data-toggle="tab">Agregar</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade {{ ($errors->any()) ? 'active in' : '' }}" id="new">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <form action="{{ url('matricula')}}" method="POST">

                                    @csrf
									@include('docente.matricula.matriculaForm')


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="tab-pane fade {{ ($errors->any()) ? '' : 'active in' }}" id="list">
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Cedula</th>
                                    <th class="text-center">Nombre Curso</th>
                                    <th class="text-center">Estado</th>
                                   <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach ($matricula as $items)
                                <tr>
                                    <td>{{$items->cedula}}</td>
                                    <td>{{$items->nombre_curso}}</td>
                                    <td>{{$items->estado}}</td>
                                    <td><a href="{{ url('matricula/'.$items->cedula. '/edit' )}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                    <form action="{{ url('matricula/'.$items->cedula) }}" method="POST" class="Eliminar">
										@csrf
										@method('DELETE')
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
									</form>
                                </tr>
                                @endforeach
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
        </div>
    </div>
</div>
</section>

@endsection

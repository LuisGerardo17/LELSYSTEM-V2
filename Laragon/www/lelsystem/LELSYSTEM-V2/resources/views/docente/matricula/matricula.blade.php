@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

	<!-- Content page -->

    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Matricula <small>Estudiantes</small></h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#list" data-toggle="tab">Lista de Estudiantes</a></li>
                      <li><a href="#new" data-toggle="tab">Agregar</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="new">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <form>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Codigo Matricula</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Codigo Curso</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Cedula</label>
                                            <input class="form-control" type="text">
                                          </div>
                                          <br>
                                          <div>
                                              Actividad <br>
                                              <input  name="act" type="radio">
                                              <label>Activa</label>
                                              <input  name="act" type="radio">
                                              <label>Inactiva</label>
                                          </div>
                                          <p class="text-center">
                                              <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                          </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="tab-pane fade active in" id="list">
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Cedula</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Codigo curso</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Matricular</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9999999999</td>
                                    <td>Enrique Sebastian</td>
                                    <td>Mera Yela</td>
                                    <td>esy.mera@yavirac.edu.ec</td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
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
        </div>
    </div>
</div>
</section>

@endsection

@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

	<!-- Content page -->

    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> listado <small>Estudiantes</small></h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#list" data-toggle="tab">Lista</a></li>

                </ul>
                <div id="myTabContent" class="tab-content">

                      <div class="tab-pane fade active in" id="list">
                        <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">fecha</th>
                                    <th class="text-center">Editar listado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="">30/20/2001</a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="">32/20/2001</a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
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

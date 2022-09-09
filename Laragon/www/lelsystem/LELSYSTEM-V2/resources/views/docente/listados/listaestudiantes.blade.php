@extends('docente.layouts.activitiesDoce')
@section('titulo', 'Materias')
@section('seccion')

	<!-- Content page -->

    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Lista <small>Estudiantes</small></h1>
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
                                    <th class="text-center">Cedula</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Presente</th>
                                    <th class="text-center">Falta</th>
                                    <th class="text-center">Atraso</th>
                                    <th class="text-center">Justificacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>9999999999</td>
                                    <td>Enrique Sebastian</td>
                                    <td>Mera Yela</td>
                                    <td>esy.mera@yavirac.edu.ec</td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>

                                </tr>
                                <tr>
                                    <td>9999999999</td>
                                    <td>Anshelo Alejandro</td>
                                    <td>Proaño Lema</td>
                                    <td>aal.proano@yavirac.edu.ec</td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>
                                    <td><input type="radio" name="1" id=""></td>
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

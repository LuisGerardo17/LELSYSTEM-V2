        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>EDITAR</h3>
                <form action="url{{'Cursos'}}" method="post" enctype="multipart/form">

                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del Curso</label>
                            <input class="form-control" type="password" name="nombre_curso " >
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Descripccion</label>
                            <input class="form-control" type="text" name="descripcion">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Fecha Inicio</label>
                            <input class="form-control" type="text" name="descripcion">
                        </div>


                        <div class="form-group label-floating">
                            <label class="control-label">Imagen del Curso</label>
                            <input type="file" name="imagen" readonly="" class="form-control" placeholder="icono clase...">
                        </div>





                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div>

        <!--parcial1-->
        <div class="overlay" id="overlayparcialUno">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Recursos</h3>
                <form action="{{ url('RecursosDoc' )}}" method="POST">
                    @csrf
                    <!--<div class="form-group label-floating">
                        <label class="control-label">Recurso a utilizar</label>
                        <select class="form-control" name="" id="selector">
                            <option>Recurso-----</option>
                            <option value="recursos">recursos</option>
                            <option value="tareas">tareas</option>
                            <option value="examenes">examenes</option>
                        </select>
                    </div>-->
                    <div class="form-group label-floating">
                        <label class="control-label">Codigo</label>
                        <input class="form-control" type="text" name="codigo_recurso">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre_recurso">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Tipo archivo</label>
                        <select class="form-control" name="id_tipo_archivo">
                            <option>tipo archivo-----</option>
                            <option value="1">pdf</option>
                            <option value="2">excel</option>
                            <option value="3">word</option>
                        </select>
                    </div>
                    <div id="imputs">
                    </div>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div>

        <!--parcial2-->
        <div class="overlay" id="overlayparcialCuatro">
            <div class="popup" id="popup5">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Actividades</h3>
                <form action="{{ url('ActividadDoc')}}" method="POST">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">Codigo</label>
                        <input class="form-control" type="text" name="codigo_actividad">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Titulo</label>
                        <input class="form-control" type="text" name="nombre_actividad">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>
                    <div id="imputs2">
                    </div>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div>

        <!--parcial3-->
        <div class="overlay" id="overlayparcialTres">
            <div class="popup" id="popup4">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Examenes</h3>
                <form action="{{ url('Examen') }}" method="POST">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">Codigo</label>
                        <input class="form-control" type="text" name="codigo_examen">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Titulo</label>
                        <input class="form-control" type="text" name="nombre_examen">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Descripcion</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>
                    <div id="imputs2">
                    </div>
                    <select class="form-select" name="parcial" >
                        <option value="Primer parcial">Primer parcial</option>
                        <option value="Segundo parcial">Segundo parcial</option>
                    </select>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>

        </div>

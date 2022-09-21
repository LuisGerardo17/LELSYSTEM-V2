        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>EDITAR</h3>
                <form action="">
                    <div class="form-group">
                        <div>
                            <input type="text" readonly="" class="form-control" placeholder="icono clase...">
                            <input type="file"  >
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">descripccion</label>
                        <input class="form-control" type="password" name="contrasena">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Nombre</label>
                        <input class="form-control" type="password" name="contrasena">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Telefono</label>
                        <input class="form-control" type="password" name="contrasena">
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" readonly="" class="form-control" placeholder="Foto...">
                            <input type="file"  >
                        </div>
                    </div>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div>

<!--parcial1-->
        <div class="overlay" id="overlayparcialUno">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Parcial 1</h3>
                <form action="" method="POST">
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
                        <label class="control-label">Nombre</label>
                        <input class="form-control" type="text" name="codigo_actividad">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Descripcion</label>
                        <input class="form-control" type="text" name="nombre_actividad">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Tipo de archivo</label>
                        <input class="form-control" type="text" name="descripcion">
                    </div>
                    <div id="imputs">
                    </div>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div>

        <!--parcial2-->
        <div class="overlay" id="overlayparcialDos">
            <div class="popup" id="popup3">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Parcial 2</h3>
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
                <h3>Parcial 2</h3>
                <form action="">
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
                    <div class="form-group label-floating">
                        <label class="control-label">Examen</label>
                        <input class="form-control" type="text" name="codigo_actividad">
                    </div>
                    <center><input type="submit" class="btn-submit" value="Enviar"></center>
                </form>
            </div>
        </div> 

 
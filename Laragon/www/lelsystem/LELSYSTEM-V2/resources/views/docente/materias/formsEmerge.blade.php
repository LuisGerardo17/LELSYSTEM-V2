        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>EDITAR</h3>
                <form action="">
                    <div class="contenedor-inputs">
                        <label>Foto</label>
                        <input class="file" type="file">
                        <input type="text" placeholder="Descripcion">
                        <label>Icono</label>
                        <input class="file" type="file">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Telefono">
                    </div>
                    <input type="submit" class="btn-submit" value="Enviar">
                </form>
            </div>
        </div>

<!--parcial1-->
        <div class="overlay" id="overlayparcialUno">
            <div class="popup" id="popup2">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Parcial 1</h3>
                <form action="">
                    <div class="form-group label-floating">
                        <label>Tipo archivo</label>
                        <select class="form-control" name="id_tipo_archivo">
                            <option>tipo archivo-----</option>
                            <option value="">tipo archivo-----</option>
                            <option value="">tipo archivo-----</option>
                            <option value="">tipo archivo-----</option>

                        </select>
                    </div>
                    <div>
                    <label>Titulo</label>
                    <input type="text">
                    <label>Descripción</label>
                    <input type="text">
                    <label>Archivo</label>
                    <input type="file">
                    <label>Tiempo de entrega</label>
                    <input type="date">
                    </div>
                    <input type="submit" class="btn-submit" value="Enviar">
                </form>
            </div>
        </div>

        <!--parcial2-->
        <div class="overlay" id="overlayparcialDos">
            <div class="popup" id="popup3">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="zmdi zmdi-close"></i></a>
                <h3>Parcial 2</h3>
                <form action="">
                    <div>
                    <label class="control-label">Seleccione que quiere añadir</label>
                    <select class="form-control" name="" id="selector">
                        <option value="">-------</option>
                        <option value="recursos">recursos</option>
                        <option value="tareas">tareas</option>
                        <option value="examenes">examenes</option>
                    </select>
                    </div>
                    <div class="contenedor-inputs">
                        <label for="">titulo</label>
                        <input type="text" name="" id="">
                        <label for="">descripccion</label><br>
                        <textarea name="" id="" cols="76" rows="2"></textarea>
                        <div id="imputs">
                            
                        </div>
                    </div>
                    <input type="submit" class="btn-submit" value="Enviar">
                </form>
            </div>
        </div>

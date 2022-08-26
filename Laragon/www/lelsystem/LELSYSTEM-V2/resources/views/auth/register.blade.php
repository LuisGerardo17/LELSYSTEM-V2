@extends('layouts.app')
@section('title', 'Register')
@section('content')


<div class="margint">
    <div class="row">
        <div class="col fondocol">

            <h2 class="text-center text-3xl font-bold">Register</h2>

            <form action="" method="POST"  enctype="">
               @csrf

               <label for="cedula">Cédula</label>
               <input type="text" placeholder="Ingrese Cédula">

               <label for="nombre">Nombres</label>
               <input type="text" placeholder="Ingrese Nombres">

               <label for="apellido">Apellidos</label>
               <input type="text" placeholder="Ingrese Apellidos">

               <label for="username">Correo</label>
               <input type="text" placeholder="Ingrese Correo">

               <label for="dirección">Dirección</label>
               <input type="text" placeholder="Ingrese Dirección">

               <label for="telefono">Telefono</label>
               <input type="text" placeholder="Ingrese Telefono celular">

               <label for="password">Contraseña</label>
               <input type="password" placeholder="Ingrese contraseña">

               <label for="imagen">Imagen</label>
               <input type="file" name="imagen"  id="imagen" placeholder="Subir imagen"  class="form-control">

               <label for="rol">Rol</label>
               <select class="selec" name="rol" id="rol">
                   <option value="estudiante">Estudiante</option>
                   <option value="docente">Docente</option>
                   <option value="administrador">Administrador</option>
               </select>

               <input type="submit" value="Registrarse">
            </form>
            <div class="my-3">
               <span> ¿ Deseas regresar a la página principal?</span> <a href="" class="volver">VOLVER</a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
</script>
@endsection

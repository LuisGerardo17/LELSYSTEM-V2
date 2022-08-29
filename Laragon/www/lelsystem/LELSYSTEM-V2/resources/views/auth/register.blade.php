@extends('layouts.appregister')
@section('title', 'Register')
@section('content')

<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>REGISTRATE AQUÍ</h1>
    <form action="" method="POST"  enctype="">
        @csrf
        <label for="cedula">Cédula</label>
        <input type="text"  id = 'cedula' name='cedula' placeholder="Ingrese Cédula">

        <label for="nombre">Nombres</label>
        <input type="text"  id = 'nombres' name='nombres' placeholder="Ingrese Nombres">

        <label for="apellido">Apellidos</label>
        <input type="text"   id = 'apellidos' name='apellidos' placeholder="Ingrese Apellidos">

        <label for="correo">Correo</label>
        <input type="email"  id ='correo' name='correo' placeholder="Ingrese Correo">

        <label for="dirección">Dirección</label>
        <input type="text" id='direccion' name='direccion' placeholder="Ingrese Dirección">

        <label for="telefono">Telefono</label>
        <input type="text"  id='telefono' name='telefono' placeholder="Ingrese Telefono celular">

        <label for="password">Contraseña</label>
        <input type="password" id = 'contrasena' name='contrasena' placeholder="Ingrese contraseña">

        <label for="password">Confirmar contraseña</label>
        <input type="password" id= 'contrasena' name='password_confirmation' placeholder="Ingrese contraseña">

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen"  id="imagen" placeholder="Subir imagen"  class="form-control">

        <label for="rol">Rol</label>
        <select class="selec" name="rol" id="rol">
            <option value="Estudiante">Estudiante</option>
            <option value="Docente">Docente</option>
            <option value="Administrador">Administrador</option>
        </select>


           <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
</script>
@endsection

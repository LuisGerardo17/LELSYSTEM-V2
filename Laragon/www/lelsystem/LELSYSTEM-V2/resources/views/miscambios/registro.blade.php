<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LELSYSTEM-REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles2.css') }}">
</head>
<body>

    <div class="login-box">
        <img class="avatar" src="static/img/logo5.png" alt="">
        <h1>REGISTRATE AQUÍ</h1>

        <form action="" method="POST"  enctype="multipart/form-data">
            @csrf
            <label for="cedula">Cédula</label>
            <input type="text" name='cedula' placeholder="Ingrese Cédula">

            <label for="nombre">Nombres</label>
            <input type="text" name='nombres' placeholder="Ingrese Nombres">

            <label for="apellido">Apellidos</label>
            <input type="text" name='apellidos' placeholder="Ingrese Apellidos">

            <label for="username">Correo</label>
            <input type="text" name='correo' placeholder="Ingrese Correo">

            <label for="dirección">Dirección</label>
            <input type="text" name='direccion' placeholder="Ingrese Dirección">

            <label for="telefono">Telefono</label>
            <input type="text" name='telefono' placeholder="Ingrese Telefono celular">

            <label for="password">Contraseña</label>
            <input type="password" name='contrasena' placeholder="Ingrese contraseña">

            <label for="password">Confirmar Contraseña</label>
            <input type="password" name='contrasena_verified_at' placeholder="Vuelva a ingresar su contraseña">

            <label for="imagen">Imagen</label>
            <input type="file" name="imagen"  id="imagen" placeholder="Subir imagen"  class="form-control">
            
            <input type="submit" value="Registrarse">

        </form>
    </div>

    <a href="http://127.0.0.1:8000/logincreadopormi?#">
        <input class="home" type="submit" value="Login">
    </a>
    <a href="http://127.0.0.1:8000/loginhpage">
        <input class="home" type="submit" value="Homepage">
    </a>

</body>
</html>

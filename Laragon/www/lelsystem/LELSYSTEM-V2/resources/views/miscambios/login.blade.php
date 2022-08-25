<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LELSYSTEM-LOGIN</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles.css') }}">   
</head>
<body>
   
    <div class="login-box">
        <img class="avatar" src="static/img/logo5.png" alt="">
        <h1>LOGIN</h1>
        <form>
            <label for="username">Correo</label>
            <input type="text" placeholder="Ingrese correo">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese contraseña">

            <input type="submit" value="Iniciar Sesión">

            <a href="#">¿Olvidaste tu contraseña?</a><br>
            <a href="http://127.0.0.1:8000/loginregister">Registrate aquí</a>
        </form>
    </div>

    <a href="http://127.0.0.1:8000/loginhpage">
        <input class="home" type="submit" value="Homepage">
    </a>

</body>
</html>
@extends('layouts.applogin')
@section('title', 'Login')
@section('content')

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
        <a href="{{route('register')}}">Registrate aquí</a>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>


@endsection

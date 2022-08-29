@extends('layouts.applogin')
@section('title', 'Login')
@section('content')

<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>LOGIN</h1>
    <form method="POST" action="">
        @csrf
        <label for="username">Correo</label>
        <input type="text" placeholder="Ingrese correo">

        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese contraseña">

        @error('message')
         <p class="border border-red-500 round-md bg-red-100 w-full text-red-600 p-2 my-2">* Error </p>
        @enderror

        <buton type="submit">Enviar</buton>

        <a href="#">¿Olvidaste tu contraseña?</a><br>
        <a href="{{route('register')}}">Registrate aquí</a>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>


@endsection

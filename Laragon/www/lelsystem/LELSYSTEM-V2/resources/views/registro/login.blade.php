@extends('layouts.applogin')
@section('title', 'Login')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>LOGIN</h1>
    
    <form class="row g-3 needs-validation" method="post" action="{{ url('login') }}">
        @csrf
        <div class="col-md-12">
          <label for="validationCustomUsername" class="form-label">Correo</label>

          <input type="text" class="form-control" name="correo" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="example.1@yavirac.edu.ec" required>

        </div>
         @error('message')
         <p class="error"> *Error</p>
         @enderror
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">Contraseña</label>

            <input type="password" class="form-control" name="contrasena" id="validationCustom03" placeholder="Contraseña" required>

        </div>

        <a class="o" href="#">¿Olvidaste tu contraseña?</a><br>

        <div>
            <button class="btn btn-primary" type="submit">Ingresar</button>
        </div>

        <a class="reg" href="{{ url('/auth.register') }}"><b>Registrate aquí</b></a>

    </form>
</div>
<x:notify-messages/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>


@endsection
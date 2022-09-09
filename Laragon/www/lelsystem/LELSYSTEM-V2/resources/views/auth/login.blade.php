@extends('layouts.applogin')
@section('title', 'Login')
@section('content')

<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>LOGIN</h1>

    <form class="row g-3 needs-validation" method="post" action="">
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

        <a class="reg" href="{{route('register')}}"><b>Registrate aquí</b></a>

    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>


@endsection



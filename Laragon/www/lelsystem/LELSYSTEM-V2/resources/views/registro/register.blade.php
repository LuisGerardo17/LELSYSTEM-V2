@extends('layouts.appregister')
@section('title', 'Register')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>REGISTRATE AQUÍ</h1>
    <form class="row g-3 needs-validation" method= "post" action="" enctype="multipart/form-data"  >
        @csrf

        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Cédula</label>
          <input type="text" class="form-control" name="cedula" id="validationCustom01"  maxlength="10" placeholder="Ingrese Cédula" required>

        </div>
        @error('cedula')
        <p class="alertas">*{{$message}}</p>
        @enderror

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="nombres" id="validationCustom02" placeholder="Ingrese Nombres" required>
       </div>
         @error('nombres')
         <p class="alertas">*{{$message}}</p>
         @enderror
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="validationCustom02" placeholder="Ingrese Apellidos" required>

        </div>
        @error('apellidos')
        <p class="alertas">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Dirección</label>
            <input type="text" class="form-control" name='direccion' id="validationCustom03" placeholder="Calle principal N. y calle secundaria" required>
        </div>
        @error('direccion')
        <p class="alertas">*{{$message}}</p>
        @enderror

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Teléfono</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">+593</span>
                <input type="text" class="form-control" name="telefono"  maxlength="10"  id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="999999999" required>
             </div>
          @error('telefono')
          <p class="alertas">*{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="validationCustomUsername" class="form-label">Correo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" name="correo" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="example.1@yavirac.edu.ec" required>
            @error('correo')
            <p class="alertas">*{{$message}}</p>
            @enderror
        </div>

         </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="validationCustom03" placeholder="Contraseña" required>
            @error('contrasena')
            <p class="alertas">*{{$message}}</p>
            @enderror
        </div>
         <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="contrasena_confirmation" id="validationCustom03" placeholder="Contraseña" required>
            @error('contrasena_confirmation')
            <p class="alertas">*{{$message}}</p>
            @enderror
        </div>

        <div class="col-md-6">
          <label for="validationCustom05" class="form-label">Imágen</label>
          <input type="file" class="form-control" name="imagen" id="validationCustom05" required>
          @error('imagen')
          <p class="alertas">*{{$message}}</p>
          @enderror
        </div>

        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
</script>
@endsection

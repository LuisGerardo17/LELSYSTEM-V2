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
          <input type="text" class="form-control" name="cedula" id="validationCustom01" placeholder="Ingrese Cédula" required>
        </div>
        @error('cedula')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="nombres" id="validationCustom02" placeholder="Ingrese Nombres" required>
        </div>
        @error('nombres')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="validationCustom02" placeholder="Ingrese Apellidos" required>
        </div>
        @error('apellidos')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Dirección</label>

            <input type="text" class="form-control" name='direccion' id="validationCustom03" placeholder="Calle principal N. y calle secundaria" required>

        </div>
        @error('direccion')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Teléfono</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">+593</span>
                <input type="text" class="form-control" name="telefono" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="999999999" required>
            </div>
        </div>
        @error('telefono')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
          <label for="validationCustomUsername" class="form-label">Correo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" name="correo" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="example.1@yavirac.edu.ec" required>
          </div>
        </div>
        @error('correo')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="validationCustom03" placeholder="Contraseña" required>
        </div>

        @error('contrasena')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="contrasena_verified_at" id="validationCustom03" placeholder="Contraseña" required>
        </div>
        <div class="col-md-6">
          <label for="validationCustom04" class="form-label">Rol</label>
          <select class="form-select" name="rol" id="validationCustom04" required>
            <option value="Estudiante">Estudiante</option>
            <option value="Docente">Docente</option>
            <option value="Administrador">Administrador</option>
          </select>
        </div>
        @error('rol')
        <p class="error">*{{$message}}</p>
        @enderror
        <div class="col-md-6">
          <label for="validationCustom05" class="form-label">Imágen</label>
          <input type="file" class="form-control" name="imagen" id="validationCustom05" required>
        </div>
        @error('imagen')
        <p class="error">*{{$message}}</p>
        @enderror
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

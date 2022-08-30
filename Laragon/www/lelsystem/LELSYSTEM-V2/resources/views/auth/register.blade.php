@extends('layouts.appregister')
@section('title', 'Register')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<div class="margint">
    <div class="row">
        <div class="col fondocol">

            <h2 class="text-center text-3xl font-bold">Register</h2>
            <!--login-->
            <form action="" method="POST"  enctype="multipart/form-data"> // ARA AGREGAR UNA IMAGEN SE PONE enctype
               @csrf
               <div class = "row">

                 <div class="mb-4">
                      <label for="text" class="form-label">Nombre completo</label>
                      <input type="text" name="name" id ="name"  placeholder="Nombre" class="form-control">
                      @error('name')
                      <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                      @enderror
                 </div>

                 <div class="mb-4">
                    <label for="text" class="form-label">Nombre de usuario</label>
                    <input type="text" name="username" id ="username"  placeholder="Nombre de usuario" class="form-control">
                    @error('username')
                    <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                    @enderror
                 </div>

               </div>

                    <div class="mb-4">
                          <label for="text" class="form-label">Correo</label>
                          <input type="email" name="email" id ="email"  placeholder="Email" class="form-control">
                           @error('email')
                          <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                          @enderror
                    </div>
                </div>

                <div class="row">

                    <div class="mb-4">
                      <label for="password" class="form-label">Contraseña</label>
                      <input type="password" name="password"  id="password" placeholder="password"  class="form-control">
                      @error('password')
                      <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                      @enderror
                    </div>

                  <div class="mb-4">
                     <label for="password" class="form-label">Confirmar  Contraseña</label>
                     <input type="password" name="password_confirmation"  id="password_confirmation" placeholder="Confirmar Contraseña"  class="form-control">

                    </div>
                </div>

               <div class="row">
                  <div class="mb-4">
                      <label for="rol" class="form-label">Rol</label>
                      <select name="rol" id="rol" class="form-control">
                       <option select disabled >Elige el rol para este usuario</option>
                         @foreach [$roles as role]
                         <option value="{{$role->id}}">{{$role->name}}</option>
                         @endforeach
                      </select>
                     </div>

                   <div class="mb-4">
                       <label for="imagen" class="form-label">Imagen</label>
                      <input type="file" name="imagen"  id="imagen" placeholder="Subir imagen"  class="form-control">
                    </div>

                 </div>

<div class="login-box">
    <img class="avatar" src="static/img/logo5.png" alt="">
    <h1>REGISTRATE AQUÍ</h1>
    <form class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Cédula</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Ingrese Cédula" required>
        </div>

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Ingrese Nombres" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Ingrese Apellidos" required>
        </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Calle principal N. y calle secundaria" required>
        </div>


        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Teléfono</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">+593</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="999999999" required>
            </div>
        </div>


         </div>

            </form>
            <div class="my-3">
               <span> ¿ Deseas regresar a la página principal?</span> <a href="" class="volver">VOLVER</a>
            </div>

        <div class="col-md-6">
          <label for="validationCustomUsername" class="form-label">Correo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="example.1@yavirac.edu.ec" required>
          </div>
        </div>

        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="validationCustom03" placeholder="Contraseña" required>

        </div>

        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="validationCustom03" placeholder="Contraseña" required>
        </div>

        <div class="col-md-6">
          <label for="validationCustom04" class="form-label">Rol</label>
          <select class="form-select" id="validationCustom04" required>
            <option value="Estudiante">Estudiante</option>
            <option value="Docente">Docente</option>
            <option value="Administrador">Administrador</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="validationCustom05" class="form-label">Imágen</label>
          <input type="file" class="form-control" id="validationCustom05" required>
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

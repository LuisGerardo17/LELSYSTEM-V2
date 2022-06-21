@extends('layouts.app')
@section('title', 'Login')
@section('content')
<h1> LOGIN</h1>
<div class="margint">
        <div class="row">
            <div class="col fondocol">
              <h2 class="text-center text-3xl font-bold">Login</h2>
                <!--login-->
                <form action="{{ route('login') }}" method="POST" class="formulario">
                    @csrf
                    /*
                    <div class="mb-4">
                        <label for="modo" class="form-label">Modo</label>
                        <input type="modo" name="modo" id ="modo"  placeholder="Modo" class="form-control">
                    </div>
                   */
                    <div class="mb-4">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" name="correo"  id="correo" placeholder="Correo"  class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña </label>
                        <input type="password" name="password"  id="password" placeholder="Cntraseña"  class="form-control">
                    </div>

                     @error('message')
                     <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                     @enderror
                    

                     <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
                    </div>
                </form>
                <div class="my-3">
                   <span> ¿ Deseas regresar a la página principal?</span> <a href="" class="volver">VOLVER</a>
                </div>
            </div>
            <div class="col-5 fondocol2 d-none d-lg-block">
                <img src="img/logo-remove.png" class="imagen" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
      

@endsection
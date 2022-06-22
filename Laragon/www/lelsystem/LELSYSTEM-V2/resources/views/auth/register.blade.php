@extends('layouts.app')
@section('title', 'Register')
@section('content')


<div class="margint">
    <div class="row">
        <div class="col fondocol">
            
            <h2 class="text-center text-3xl font-bold">Register</h2>
            <!--login-->
            <form action="" method="POST"  enctype=""> // ARA AGREGAR UNA IMAGEN SE PONE enctype
               @csrf
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
                
               
              <!--
                <div class="row">
                    <div class="mb-4">
                        <label for="text" class="form-label">Cédula</label>
                        <input type="text" name="ci" id ="ci"  placeholder="Cédula de identidad" class="form-control">
                        @error('ci')
                        <p class ="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
                        @enderror
                     </div>
              -->
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
              <!--
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
                -->

              <div class=row>
                 <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-dark">Registrarse</button>
                  </div>
                  <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-dark">Cancelar</button>
                  </div>


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
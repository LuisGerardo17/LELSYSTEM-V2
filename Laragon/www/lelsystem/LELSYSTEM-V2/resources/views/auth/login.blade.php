@extends('layouts1.app')
@section('title', 'Login')
@section('content')



<div class="hola">

            <div class="col fondocol">
              <h2 class="text-center text-3xl font-bold">Login</h2>
                <!--login-->
                    <form action="{{ route('login') }}" method="POST" class="formulario">
                       

                     </form>
                <div class="my-3">
                   <span> ¿ Deseas regresar a la página principal?</span> <a href="" class="volver">VOLVER</a>
                </div>
            </div>
            <div class="col-5 fondocol2 d-none d-lg-block">
                <img src="img/logo-remove.png" class="imagen" alt="">
            </div>

</div>
</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>


@endsection

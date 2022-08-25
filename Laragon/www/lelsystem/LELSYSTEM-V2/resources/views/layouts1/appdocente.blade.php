<!doctype html>
<html lang="es">

<head>
    <title>LELSYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('static/css/docente.css') }}"/>

</head>

<body>
    <header class="cabecera">
        <div class="container-xl logo-container">
            <a href="#" class="logo"><b>PLATAFORMA @LELSYSTEM MODULO DOCENTE</b></a>
            <nav class="lista">
                <ul>
                    @if(auth()->check())
                      <li class ="mx-8">
                        <p class="text-xl">Welcome <b>{{auth()->user()->name}}</b></p>
                      </li>
                      <li class="naa"><a href="{{route('login.destroy')}}"><h5><b>Log Out</b> </h5> </a>
                        
                      </li>
                      <i class="cerrar icon ion-md-person"></i>
                
                    @else
                       <li class="nav-item sesiones">
                        <a class="nav-link marign colorq" href="{{route('login')}}">Login</a>
                      </li>
                      <li class="nav-item sesiones">
                        <a class="nav-link marign colorq" href="{{route('register')}}">Register</a>
                      </li>
                   @endif
                </ul>
                
            </nav>
        </div>
    </header>

    <main class="container">
        <center>
            <div class="container">
                <div class="row text-center py-4">
                    <h1>BIENVENIDOS</h1>
                </div>
                <div class="row py-2">
                    <h3>Tus cursos</h3>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <div class="card carda" style="width: 18rem;">
                            <img src="../img_carreras/informatica.jpg" class="card-img-top" height="300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Informatica</h5>
                                <a href="clase informatica.html" class="btn btn-dark">ENTRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card carda" style="width: 18rem;">
                            <img src="../img_carreras/mecanica.jpg" class="card-img-top" height="300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mecanica</h5>
                                <a href="clase mecanica.html" class="btn btn-dark">ENTRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card carda" style="width: 18rem;">
                            <img src="../img_carreras/electricidad.jpg" class="card-img-top" height="300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Electricidad</h5>
                                <a href="clase electricidad.html" class="btn btn-dark">ENTRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card carda" style="width: 18rem;">
                            <img src="../img/analisis.jpg" class="card-img-top" height="300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Malla Curricular</h5>
                                <a href="malla.html" class="btn btn-dark">ENTRAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </center>
    </main>

    
    <section class="">

        <footer class="text-center text-white" style="background-color: rgb(62, 65, 68)">

            <div class="container p-4 pb-0">

                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Pagina Oficial &nbsp;</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            https://lelsYstem@.edu.ec
                        </button>
                    </p>
                </section>

            </div>


            <div class="text-center p-3" style="background-color: rgb(5, 5, 5);">
                © 2022 LELSISTEM:
                <a class="text-white" href="https://mdbootstrap.com/">LELSYSTEM.com</a>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
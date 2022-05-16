<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')- LELSYSTEM-V2</title>

    <!-- Bootstrap 5.1.3 -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- ESTILOS CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('static/css/estilos.css') }}"/>
    <link rel="stylesheet" href="{{ asset('static/css/login.css') }}"/>
</head>
<body>
    <div id="fondo">
        <img src="static/img/logo5.png" class="logo" width="135px" alt="">
        <nav class="menu">
            <ul class="nav lista">
                <li class="nav-item sesiones">
                    <a class="nav-link marign colorq" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item sesiones">
                    <a class="nav-link marign colorq" href="{{route('register')}}">Register</a>
                </li>
              </ul>
        </nav>
        <br><br><br><br>
    </div>

    <div class="margint">
        <div class="row">
            <div class="col fondocol">
                <div class="text-end">
                    <p>@LELSYSTEM</p>
                </div>
                <h2 class="text-center">Bienvenido</h2>
                <!--login-->
                <form action="" method="POST">
                    <div class="mb-4">
                        <label for="text" class="form-label">Correo</label>
                        <input type="email" name="email" id ="email"  placeholder="Email"class="form-control">
                    </div>
                   
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password"  id="password" placeholder="password"class="form-control">
                    </div>

                    <p class="border border-red-500 rounded-mg bg-red-100 w-full text-red-600 p-2 my-2" >Error</p>
                    
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
                    </div>
                </form>
                <div class="my-3">
                   <span>Deseas regresar a la pagina principal</span> <a href="index.html" class="volver">VOLVER</a>
                </div>
            </div>
            <div class="col-5 fondocol2 d-none d-lg-block">
                <img src="img/logo-remove.png" class="imagen" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
      

    
    @yield('content')
    
</body>
</html>
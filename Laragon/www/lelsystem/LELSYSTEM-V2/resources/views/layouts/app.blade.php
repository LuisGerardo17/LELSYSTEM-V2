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

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    
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
 @yield('content')
    
</body>
</html>
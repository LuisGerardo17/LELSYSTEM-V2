<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LELSYSTEM-REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles2.css') }}">
</head>
<body>

   @yield('content')
   <a href="{{route('login')}}">
    <input class="home" type="submit" value="Login">
   </a>
    <a href="{{route('home')}}">
    <input class="home" type="submit" value="Homepage">
    </a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LELSYSTEM-REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles2.css') }}">
</head>
<body>

   @yield('content')
   
   <a href="{{url('/login')}}">
    <input class="log" type="submit" value="Login">
   </a>
   <br>
   <a href="{{route('home')}}">
    <input class="home" type="submit" value="Homepage">
   </a>
      
</body>
</html>

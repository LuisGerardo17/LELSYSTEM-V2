<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')- LEALSYSTEM</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles.css') }}">
</head>
<body>
@yield('content')
   
   <a href="{{route('home')}}">
    <input class="home" type="submit" value="Homepage">
   </a>
    
</body>
</html>

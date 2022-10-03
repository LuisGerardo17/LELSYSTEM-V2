<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')- LEALSYSTEM</title>
    @notifyCss
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login/styles.css') }}">

</head>
<body>
@yield('content')

   <a href="{{route('home')}}">
    <input class="home" type="submit" value="home">
   </a>

		@notifyJs
</body>
</html>

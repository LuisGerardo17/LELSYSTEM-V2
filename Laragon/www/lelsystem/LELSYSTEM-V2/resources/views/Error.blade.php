<style>
    body{
    background: rgb(8,28,34);
    margin: 0;
    padding: 0;
    height: 100vh;
    font-family: 'Open Sans', sans-serif;
}
img{
    width: 50%;
}
.container{
    height: 100vh;
    display: flex;
    flex-direction: column;
    gap: 30px;
    align-items: center;
    justify-content: center;
}
h1{
    color: rgb(233, 238, 245);
    font-size: 20px;
    padding: 20px;
}
button{
    padding: 13px 30px;
    border-radius: 15px;
    border: none;
    background: #009688;
    color: white;
    cursor: pointer;
}

@media screen and (max-width:630px){
    h1{        
        font-size: 16px;        
    }
}
</style>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <img src="{{ asset('admin/assets/img/img1.svg') }}" alt="">
        <h1>La página que ha solicitado no se encuentra disponible</h1>
        <div class="boton">
            <a href="{{ url('/login') }}"><button>Ir al login</button></a>
        </div>
    </div>



</body>

</html>
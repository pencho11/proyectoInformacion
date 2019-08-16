<!doctype html>
<html lang="{{  app()->getLocale() }} ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/boo  tstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-primary">
    <div class="container">
    @if(Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" type="button" class="btn btn-outline-info">CASA<span class="navbar-toggler-icon"></span></a>
                    @else
                        <a href="{{ route('login') }}" type="button" class="btn btn-outline-info">INICIAR SESION<span class="navbar-toggler-icon"></span></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button" class="btn btn-outline-info">REGISTRARSE<span class="navbar-toggler-icon"></span></a>
                        @endif
                    @endauth
            @endif
    </div>
</nav>
<div class="container">
   <h1><span >Bienvenido a ventas generales.</span></h1>
    @include('admin.template.partial.nav2')

    <div  class="alert alert-primary" role="alert">
                    <hr>
                    <div class="alert alert-success" role="alert" >¡Pon aquí la cita que quieras!</div>
                    </div>
    <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                <hr>
                   <!-- Imagenes -->
                   @include('admin.template.partial.nav1')
                    <img src="{{asset('images\Modelo-de-Gestion-de-Negocios-TO.png')}}" alt="Hola mundo" class="rounded float-right">
                   
                    <img src="{{asset('images\greeting-1296493_960_720.png')}}" alt="Hola mundo" class="rounded float-left">
                    
                    <div class="text-center"><img src="{{asset('images\inteligencia-de-negocios.png')}}" alt="Hola mundo" ></div>
                    <a>Visitenos<a/>
                    <a href="https://facebook.com" target="_black">Facebook</a>
                    <a href="https://youtube.com" target="_black">Youtube</a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_black">Instagram</a>
                    <a href="https://www.eltiempo.com/" class="badge badge-dark" target="_black">El tiempo</a>
                    <h6>&copy; Company 2019</h6>

                   
                </div>
        </div>
    </body>
</html>

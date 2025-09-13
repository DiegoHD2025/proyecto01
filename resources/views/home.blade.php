<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.base')

    @section('title', 'home')

    @section('telefono','937931281')

    @section('content')
        <div class="text-center">
            <h1 class="display-5">Bienvenido a Inicio</h1>
            <p class="lead">Esta es una plantilla base minimalista con Bootstrap 5. - Diego Sebastián Holgado Delgado @yield('telefono', '967931281')</p>
            <a href="#" class="btn btn-primary mt-3">Comenzar</a>
        </div>
    @endsection

    @section ('Footer', 'home')

</body>
</html>
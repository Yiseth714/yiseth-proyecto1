<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/plantilla.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/tablas.css') }}">


    <title>@yield('tittle')</title>
</head>
<body>
    @yield('content')
    
    <div class="button-container">
        <h1>Elija una opción</h1>
        <a href="{{ route('Eventos.create') }}" class="button">Asignar entrenadores</a>
        <a href="{{ route('Eventos.index') }}" class="button">Programar partidos</a>
        <a href="{{ route('Gestion.create') }}" class="button">Registrar resultados</a>
        <a href="{{ route('Gestion.edit', 0) }}" class="button">Enviar notificación</a>
        <a href="{{ route('Gestion.index') }}" class="button">Gestionar torneos</a>



        <a href="/" class="button">Ir a Home</a>
    </div>
</body>
</html>
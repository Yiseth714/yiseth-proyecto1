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
        <a href="{{ route('Opciones.index') }}" class="button">Registrar entrenador</a>
        <a href="{{ route('Opciones.edit', 0) }}" class="button">Registrar equipo</a>
        <a href="{{ route('Eventos.edit', 0) }}" class="button">Registrar deportista</a>
        <a href="{{ route('Opciones.create') }}" class="button">Iniciar sesion</a>
        <a href="/" class="button">Ir a Home</a>
    </div>
</body>
</html>
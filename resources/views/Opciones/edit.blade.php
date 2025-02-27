@extends('layouts.plantila')

@section('title', 'Registrar equipo')

@section('content')

<form action="login.php" method="POST">

<h1 style="text-align: center;">Llene todos los campos para registrar un equipo</h1>    
    <table>
        <tr>
            <th>Id del equipo</th>
            <td><input type="text" name="Id equipo" placeholder="ID" required></td>
        </tr>
     
        <tr>
            <th>Id del entrenador</th>
            <td><input type="text" name="Id entrenador" placeholder="Id entrenador" required></td>
        </tr>
        
   
        <tr>
            <th>Categoria</th>
            <td><input type="text" name="categoria" placeholder="Futbol, Baloncesto..." required></td>
        </tr>
  
        <tr>
            <th>Contraseña</th>
            <td><input id="contraseñan" type="password" name="contraseña" placeholder="Contraseña" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <a href="" class="button">Registrar</a><br>
        <a href="{{ route('layouts.plantila') }}" class="button">Regresar</a>
            </td>
        </tr>
    </table>
    
@endsection
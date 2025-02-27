@extends('layouts.plantillaE')

@section('title', 'Inicio de sesion')

@section('content')

    
    <form action="login.php" method="POST">
    
    <h1 style="text-align: center;">Llene todos los campos para su inicio de Sesión</h1>
        <table>
            <tr>
                <th>Elija su cargo</th>
                <td>
                    <select name="tipo_persona" required>
                        <option value="">Seleccione...</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Entrenador">Entrenador</option>
                        <option value="Arbitro">Árbitro</option>
                        <option value="Deportista">Deportista</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>ID</th>
                <td><input type="text" name="id" required></td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>Documento de Identidad</th>
                <td><input type="text" name="documento" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Iniciar Sesión</button>
                </td>
            </tr>
        </table>

@endsection
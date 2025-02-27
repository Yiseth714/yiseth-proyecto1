@extends('layouts.plantila')

@section('title', 'Registrar deportista')

@section('content')
<form action="registrar_deportista.php" method="POST">

    <h1 style="text-align: center;">Registro de Deportista</h1>

    <table>
        <tr>
            <th>Correo Electrónico</th>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <th>Documento de Identidad</th>
            <td><input type="text" name="documento" required></td>
        </tr>
        <tr>
            <th>Deporte</th>
            <td>
                <select name="deporte" required>
                    <option value="">Seleccione...</option>
                    <option value="Baloncesto">Baloncesto</option>
                    <option value="Fútbol">Fútbol</option>
                    <option value="Vóley">Vóley</option>
                    <option value="Atletismo">Atletismo</option>
                    <option value="Natación">Natación</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" class="button">Registrar</button>
<a href="{{ route('layouts.plantila') }}" class="button">Regresar</a>

            </td>
        </tr>
    </table>
</form>

@endsection
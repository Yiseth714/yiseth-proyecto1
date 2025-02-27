@extends('layouts.plantillaE')

@section('title', 'Gestion de torneos')

@section('content')
<form action="gestionar_torneo.php" method="POST">
    <h1 style="text-align: center;">Gestionar Torneos</h1>

    <table>
        <tr>
            <th>Nombre del Torneo</th>
            <td><input type="text" name="nombre_torneo" required></td>
        </tr>
        <tr>
            <th>Deporte</th>
            <td>
                <select name="deporte" required>
                    <option value="">Seleccione...</option>
                    <option value="Fútbol">Fútbol</option>
                    <option value="Baloncesto">Baloncesto</option>
                    <option value="Vóley">Vóley</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Fecha de Inicio</th>
            <td><input type="date" name="fecha_inicio" required></td>
        </tr>
        <tr>
            <th>Fecha de Fin</th>
            <td><input type="date" name="fecha_fin" required></td>
        </tr>
        <tr>
            <th>Ubicación</th>
            <td><input type="text" name="ubicacion" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" class="button">Guardar Torneo</button>
            </td>
        </tr>
    </table>
</form>
@endsection
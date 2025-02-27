@extends('layouts.plantillaE')

@section('title', 'Registrar resultados')

@section('content')
<form action="registrar_resultados.php" method="POST">
<h1 style="text-align: center;">Registrar Resultados</h1>

    <table>
        <tr>
            <th>Equipo 1</th>
            <td>
                <select name="equipo1" required>
                    <option value="">Seleccione...</option>
                    <option value="Equipo A">Equipo A</option>
                    <option value="Equipo B">Equipo B</option>
                    <option value="Equipo C">Equipo C</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Equipo 2</th>
            <td>
                <select name="equipo2" required>
                    <option value="">Seleccione...</option>
                    <option value="Equipo A">Equipo A</option>
                    <option value="Equipo B">Equipo B</option>
                    <option value="Equipo C">Equipo C</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Goles/Puntos Equipo 1</th>
            <td><input type="number" name="goles_equipo1" required></td>
        </tr>
        <tr>
            <th>Goles/Puntos Equipo 2</th>
            <td><input type="number" name="goles_equipo2" required></td>
        </tr>
        <tr>
            <th>Fecha del Partido</th>
            <td><input type="date" name="fecha" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" class="button">Registrar Resultado</button>
            </td>
        </tr>
    </table>
</form>
@endsection
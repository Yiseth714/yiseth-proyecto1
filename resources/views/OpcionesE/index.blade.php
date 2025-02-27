@extends('layouts.plantillaE')

@section('title', 'Programar partido')

@section('content')
<form action="registrar_deportista.php" method="POST">

    <h1 style="text-align: center;">Programar Partido</h1>
    <form action="programar_partido.php" method="POST">
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
                <th>Fecha</th>
                <td><input type="date" name="fecha" required></td>
            </tr>
            <tr>
                <th>Hora</th>
                <td><input type="time" name="hora" required></td>
            </tr>
            <tr>
                <th>Lugar</th>
                <td><input type="text" name="lugar" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="button">Programar</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
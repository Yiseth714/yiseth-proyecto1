@extends('layouts.plantillaE')

@section('title', 'Asignar entrenador')

@section('content')
    <form action="asignar_entrenador.php" method="POST">
<h1 style="text-align: center;">Asignar Entrenador a Equipo</h1>

        <table>
            <tr>
                <th>Entrenador</th>
                <td>
                    <select name="entrenador" required>
                        <option value="">Seleccione...</option>
                        <option value="Entrenador 1">Entrenador 1</option>
                        <option value="Entrenador 2">Entrenador 2</option>
                        <option value="Entrenador 3">Entrenador 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Equipo</th>
                <td>
                    <select name="equipo" required>
                        <option value="">Seleccione...</option>
                        <option value="Equipo A">Equipo A</option>
                        <option value="Equipo B">Equipo B</option>
                        <option value="Equipo C">Equipo C</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="button">Asignar</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
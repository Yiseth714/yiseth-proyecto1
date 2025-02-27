@extends('layouts.plantillaE')

@section('title', 'Enviar notificacion')

@section('content')
<form action="enviar_notificacion.php" method="POST">
    <h1 style="text-align: center;">Enviar Notificación</h1>

    <table>
        <tr>
            <th>Destinatario</th>
            <td>
                <select name="destinatario" required>
                    <option value="">Seleccione...</option>
                    <option value="Todos">Todos</option>
                    <option value="Entrenadores">Entrenadores</option>
                    <option value="Árbitros">Árbitros</option>
                    <option value="Deportistas">Deportistas</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Asunto</th>
            <td><input type="text" name="asunto" required></td>
        </tr>
        <tr>
            <th>Mensaje</th>
            <td><textarea name="mensaje" rows="5" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit" class="button">Enviar Notificación</button>
            </td>
        </tr>
    </table>
</form>
@endsection
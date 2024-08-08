<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios entre valores</title>
</head>
<body>
    <h1>Comentarios entre valores</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del Usuario</th>
                <th>Calificación</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->nombre_usuario }}</td>
                    <td>{{ $comentario->calificacion }}</td>
                    <td>{{ $comentario->detalles }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

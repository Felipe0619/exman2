<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atracciones</title>
</head>
<body>
    <h1>Lista de Atracciones</h1>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Calificación Promedio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atracciones as $atraccion)
                <tr>
                    <td>{{ $atraccion->titulo }}</td>
                    <td>{{ $atraccion->descripcion }}</td>
                    <td>{{ number_format($atraccion->calificacion_promedio, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

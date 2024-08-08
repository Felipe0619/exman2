<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atracciones por Especie</title>
</head>
<body>
    <h1>Atracciones de la especie "{{ $especie->nombre }}"</h1>
    <ul>
        @foreach($especie->atracciones as $atraccion)
            <li>{{ $atraccion->titulo }} - {{ $atraccion->descripcion }}</li>
        @endforeach
    </ul>
</body>
</html>

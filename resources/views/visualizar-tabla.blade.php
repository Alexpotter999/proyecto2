<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tabla</title>
</head>
<body>
    <h1>Tabla de la Base de Datos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <!-- Agrega más columnas según tu tabla -->
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->Nombre }}</td>
                    <!-- Agrega más celdas según tu tabla -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

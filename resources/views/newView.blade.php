<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <h1>Lista de Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->ID }}</td>
                    <td>{{ $producto->Nombre }}</td>
                    <td>{{ $producto->Precio }}</td>
                    <td>{{ $producto->Cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

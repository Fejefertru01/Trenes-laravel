<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver tren</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tipo de Tren</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $train->name }}</td>
                <td>{{ $train->passengers }}</td>
                <td>{{ $train->year }}</td>
                <td>{{ $train->train_type->type }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('trains.index') }}">Volver a trenes</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tren</title>
</head>
<body>
    <form action="{{ route('trains.store') }}" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name">
        <label>Pasajeros</label>
        <input type="text" name="passengers">
        <label>Año</label>
        <input type="text" name="year">
        <label>Tipo de tren</label>
        <select name="train_type_id">
            @foreach ($trainTypes as $trainType)
                <option value="{{ $trainType->id }}">{{ $trainType->type }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Crear">
    </form>
    <a href="{{ route('trains.index') }}">Volver a trenes</a>
</body>
</html>
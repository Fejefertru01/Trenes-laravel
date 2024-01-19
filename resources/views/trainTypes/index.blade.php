<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo de Trenes</title>
</head>
<body>
    <h1>TIPOS DE TRENES</h1>
    <a href="{{route('trainTypes.create')}}">Crear tipo de Tren</a>
    <table border="1px solid black">
            <thead>
                <tr>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainTypes as $trainType)
                    <tr>
                        <td>{{ $trainType->type }}</td>
                        <td><form action="{{ route('trainTypes.show', ['trainType' => $trainType->id]) }}">
                            <input type="submit" value="Ver">
                        </form>
                        </td>
                        <td><form action="{{ route('trainTypes.edit', ['trainType' => $trainType->id]) }}">
                            <input type="submit" value="Editar">
                        </form>
                        </td>
                        <td>
                            <form action="{{ route('trainTypes.destroy', ['trainType' => $trainType->id]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <h1>TICKETS</h1>
    <a href="{{route('tickets.create')}}">Crear ticket</a>
    <table border="1px solid black">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Precio</th>
                    <th>Tren</th>
                    <th>Tipo de ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->date }}</td>
                        <td>{{ $ticket->price }}</td>
                        <td>{{ $ticket->train->name }}</td>
                        <td>{{ $ticket->ticket_type->type }}</td>
                        <td>
                            <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}">
                            <input type="submit" value="Ver">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}">
                            <input type="submit" value="Editar">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{ route('trains.index') }}">Trenes</a>
    <a href="{{ route('trainTypes.index') }}">Tipos de trenes</a>
    <a href="{{ route('ticketTypes.index') }}">Tipos de tickets</a><br>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>
<body>
    <a href="{{route('tickets.create')}}">Crear ticket</a>
    <table>
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
                        <td>{{ $ticket->train_id }}</td>
                        <td>{{ $ticket->ticket_type_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>
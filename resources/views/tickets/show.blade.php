<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver ticket</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tren</th>
                <th>Tipo de Ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ticket->date }}</td>
                <td>{{ $ticket->price }}</td>
                <td>{{ $ticket->train->name }}</td>
                <td>{{ $ticket->ticket_type->type }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
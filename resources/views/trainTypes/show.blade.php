<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver tipo de Trenes</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $trainType->type }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
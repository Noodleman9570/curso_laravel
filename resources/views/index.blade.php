<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vista creada en blade y llamada desde el controlado</h1>
    <h2>Listado de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
                <tr>
                    <th>{{ $game->id }}</th>
                    <th>{{ $game->name }}</th>
                    <th>{{ $game->category_id }}</th>
                    <th>{{ $game->created_at }}</th>
                    <th>
                        @if ($game->active)
                            <span style="color: green;">Activo</span>
                        @else
                            <span style="color: red;">Inactivo</span>
                        @endif
                    </th>
                </tr>
            @empty
                <tr>
                    <th>Sin video juegos</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
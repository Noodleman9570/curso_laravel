<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Esta es la página donde se creará el formulario para dar de alta los juegos, estamos utilizando un Controlador</h1>

    <p><a href="{{ route('games') }}">Listar todos los juegos</a></p>

    <form action="{{ route('createVideogame') }}" method="POST">

        @csrf 

        <input type="text" placeholder="Nombre del videojuego" name="name_game">
        @error('name_game')
            {{ $message }}
        @enderror
        <select name="category_id" id="">

            @forelse ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @empty
                <option value="">No hay categorias para mostrar</option>
            @endforelse

        </select>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if($categoryGame):?> {{-- Estructurasdecontrolconetiquetasdephp --}}
    
        <h1>Bienvenido a la pagina del juego: {{ $nameVideogame }} que pertenece a la categoria: {{ $categoryGame }}</h1>
    
    <?php else: ?>

        <h1>Bienvenido a la pagina del juego: {{ $nameVideogame }}</h1>  
    
    <?php endif; ?>

    <h3>{{ $fecha }}</h3>

    @if ($categoryGame) {{-- Estructuras de control con etiquetas de la plantillas blade --}}

        <h1>Bienvenido a la pagina del juego: {{ $nameVideogame }} que pertenece a la categoria: {{ $categoryGame }}</h1>

    @else

        <h1>Bienvenido a la pagina del juego: {{ $nameVideogame }}</h1>  
    
    @endif

    <h3>{{ $fecha }}</h3>
</body>
</html>
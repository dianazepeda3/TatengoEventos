<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
</head>
<body>   
    <a href="/producto" class="nav__enlace nav__enlace--activo">INICIO</a>
    <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <a href="/producto/create" class="nav__enlace ">AGREGAR</a>
    
    <h1>Productos</h1>
    <ul>
        @foreach ($productos as $prod)
            <li>
                {{$prod->id}} - {{$prod->nombre}} 
                <a href="{{route('producto.show', $prod)}}">Detalle (Show)</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
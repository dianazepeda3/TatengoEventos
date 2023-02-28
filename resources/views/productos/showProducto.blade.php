<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/producto" class="nav__enlace nav__enlace--activo">INICIO</a>
    <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <a href="/producto/create" class="nav__enlace ">AGREGAR</a>
    
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <h1>Show {{$producto->nombre}}</h1> 
        <a href="{{route('producto.edit', $producto)}}">Editar</a>         
        <ul>
            <li>ID: {{$producto->id}}</li>
            <li>NOMBRE: {{$producto->nombre}}</li>
            <li>DESCRIPCION: {{$producto->descripcion}}</li>
            <li>PRECIO: ${{$producto->precio}} </li>      
        </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
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
        
    <h1>Show {{$producto->nombre}}</h1> 
    <a href="{{route('producto.edit', $producto)}}">Editar</a>         
    <form action={{ route('producto.destroy', $producto) }} method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>      
    <ul>
        <li>ID: {{$producto->id}}</li>
        <li>NOMBRE: {{$producto->nombre}}</li>
        <li>DESCRIPCION: {{$producto->descripcion}}</li>
        <li>PRECIO: ${{$producto->precio}} </li>      
    </ul>
</body>
</html>
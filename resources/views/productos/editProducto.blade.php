<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <a href="/producto" class="nav__enlace nav__enlace--activo">INICIO</a>
    <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <a href="/producto/create" class="nav__enlace ">AGREGAR</a>
    
    <h1>Editar Productos</h1>
    <form action={{ route('producto.update', $producto) }} method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" value="{{$producto->nombre}}" required><br><br>

        <label for="descripcion">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" value="{{$producto->descripcion}}"><br><br>

        <label for="color">Color</label>
        <input id="color" name="color" type="text" value="{{$producto->color}}"><br><br>

        <label for="total">Total</label>
        <input id="total" name="total" type="number" value="{{$producto->total}}"><br><br>

        <label for="disponible">Disponible</label>
        <input id="disponible" name="disponible" type="number" value="{{$producto->disponible}}"><br><br>

        <label for="precio">Precio</label>
        <input id="precio" name="precio" type="number" value="{{$producto->precio}}"><br><br>

        <input type="submit" value="Editar">
    </form>
</body>
</html>
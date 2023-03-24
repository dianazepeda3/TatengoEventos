<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <a href="/producto" class="nav__enlace nav__enlace--activo">INICIO</a>
    <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <a href="/producto/create" class="nav__enlace ">AGREGAR</a>

    <h1>Crear Productos</h1>
    <form action="/producto" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" value="{{ old('nombre') }}"><br><br>
        @error('nombre')
            <h4>{{ $message }}</h4>
        @enderror

        <label for="descripcion">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" value="{{ old('descripcion') }}"><br><br>

        <label for="color">Color</label>
        <input id="color" name="color" type="text" value="{{ old('color') }}"><br><br>

        <label for="total">Total</label>
        <input id="total" name="total" type="number" value="{{ old('total') }}"><br><br>

        <label for="disponible">Disponible</label>
        <input id="disponible" name="disponible" type="number" value="{{ old('disponible') }}"><br><br>

        <label for="precio">Precio</label>
        <input id="precio" name="precio" type="number" value="{{ old('precio') }}"><br><br>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>
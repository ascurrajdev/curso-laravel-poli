<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/datos')}}" method="POST">
        @csrf
        @method('DELETE')
        <label for="">Nombre:</label>
        <input type="text" name="nombre" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
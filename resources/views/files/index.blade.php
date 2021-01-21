<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/archivos')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre" /><br>
        <label for="">Archivos:</label><br>
        <input type="file" name="archivos"/><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
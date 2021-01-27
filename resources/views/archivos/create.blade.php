<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('archivos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Seleccione el archivo:</label>
        <input type="file" name="archivo" />
        <button type="submit">Enviar archivo</button>
    </form>
</body>
</html>
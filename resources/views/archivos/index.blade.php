<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Extension</th>
                <th>Url</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($archivos as $archivo)
                <tr>
                    <td>{{$archivo->id}}</td>
                    <td>{{$archivo->nombre}}</td>
                    <td>{{$archivo->extension}}</td>
                    <td><a href="{{'storage/'.$archivo->url}}">Archivo</a></td>
                    <td>
                        <a href="{{route('archivos.edit',$archivo->id)}}">Modificar</a>
                        <form action="{{route('archivos.destroy',$archivo->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar registro</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@extends("layouts.app")
@section("body")
    <h1>{{$ruta}}</h1>

    <x-table>
        <x-slot name="head">
            <x-head-table alert-type="danger"/>
        </x-slot>
        <x-slot name="body">
            <x-body-table :registros="$registros" />
        </x-slot>
    </x-table>

    <form action="{{url('/archivos')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre" /><br>
        <label for="">Archivos:</label><br>
        <input type="file" name="archivos"/><br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection
<tbody>
    @foreach($registros as $registro)
        <x-row-table :id="$registro['id']" :nombre="$registro['name']" />
    @endforeach
</tbody>
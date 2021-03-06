@extends('adminlte::page')

@section('title', 'Carreras')


@section('content')

<h1>Listado de Carreras registradas en el Sistema</h1>

    <table class="data-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad de Tesis</th>
            </tr>
        </thead>
        <tbody>
        @if($titles)
            @foreach($titles as $title)
            <tr>
                <td><a href="{{route('titulos.show', ['id' => $title->id])}}">{{$title->nombre}}</a></td>
                <td>{{$title->paper->count()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
@section('js')
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable({
        "order": [[ 0, "asc" ]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        }
    });
        });
    </script>
@stop
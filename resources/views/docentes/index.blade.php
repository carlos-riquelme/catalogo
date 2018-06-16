@extends('adminlte::page')

@section('title', 'Docentes')


@section('content')

<h1>Listado de Docentes registrados en el Sistema</h1>

    <table class="data-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Cantidad de Tesis</th>
            </tr>
        </thead>
        <tbody>
        @if($teachers)
            @foreach($teachers as $teacher)
            <tr>
                <td><a href="{{route('docentes.show', ['id' => $teacher->id])}}">{{$teacher->nombre}}</a></td>
                <td>{{$teacher->tipo}}</td>
                <td>
                    {{$teacher->paper->count()}}
                </td>
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
        "order": [[ 3, "asc" ]],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
        }
    });
        });
    </script>
@stop
@extends('adminlte::page')

@section('title', 'Autores')


@section('content')

<h1>Listado de Autores registrados en el Sistema</h1>

    <table class="data-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Tesis</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
        @if($authors)
            @foreach($authors as $author)
            <tr>
                <td><a href="{{route('autores.show', ['id' => $author->id])}}">{{$author->nombre}} {{$author->apellidos}}</a></td>
                <td>
                    @foreach($author->papers as $paper)
                        {{$paper->title->nombre}}
                    @endforeach
                </td>
                <td>
                @if($author->papers)

                    @foreach($author->papers as $paper)
                        <a href="{{route('tesis.show', ['id' => $paper->id])}}">{{$paper->titulo}}</a>
                    @endforeach

                @else
                    "No tiene Tesis registradas."
                @endif
                </td>    
                <td>
                    @foreach($author->papers as $paper)
                        {{$paper->año}}
                    @endforeach
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
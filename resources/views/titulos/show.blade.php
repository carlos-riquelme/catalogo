@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>{{$title->nombre}}</h1>


<div class="col-sm-12" >

<table id="table" class="data-table" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Portada</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Docente Guía</th>
            </tr>
        </thead>
        <tbody>
        @if($papers)
            @foreach($papers as $paper)
            <tr>
                <td>{{$paper->codigo}} {{$paper->año}}</td>
                <td> <img height="150" src="{{$paper->photo ? $paper->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{route('papers.show', ['id' => $paper->id])}}">{{$paper->titulo}}</a></td>
                <td>
                    @if($paper->authors)

                    @foreach($paper->authors as $author)
                        <a href="{{route('authors.edit', ['id' => $author->id])}}">{{$author->nombre}}   {{$author->apellidos}}</a>
                    @endforeach

                    @else
                    "No tiene autor asignado."
                    @endif
                </td>
                <td>{{$paper->año}}</td>
                <td>{{$paper->teacher->nombre}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>
</div>
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
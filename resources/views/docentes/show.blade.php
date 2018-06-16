@extends('adminlte::page')

@section('title', 'UAC-Ancud')


@section('content')

<h1>Listado de Tesis asociadas a <b>{{$teacher->nombre}}</b></h1>
<h2>Docente {{$teacher->tipo}}</h2>

{!! Form::model($teacher, ['method'=>'GET', 'action'=> ['UserDocentesController@show', $teacher->id],'files'=>true]) !!}

<div class="col-sm-6" >



{!! Form::close() !!}

</div>

<div class="col-sm-12" >

<table class="data-table">
        <thead>
            <tr>
                <th>Portada</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Título al que postula</th>
            </tr>
        </thead>
        <tbody>
        @if($papers)
            @foreach($papers as $paper)
            <tr>
                <td> <img height="150" src="{{$paper->photo ? $paper->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{route('tesis.show', ['id' => $paper->id])}}">{{$paper->titulo}}</a></td>
                <td>
                    @if($paper->authors)

                    @foreach($paper->authors as $author)
                        <a href="{{route('autores.edit', ['id' => $author->id])}}">{{$author->nombre}}   {{$author->apellidos}}</a>
                    @endforeach

                    @else
                    "No tiene autor asignado."
                    @endif
                </td>
                <td>{{$paper->año}}</td>
                <td>{{$paper->title->nombre}}</td>
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

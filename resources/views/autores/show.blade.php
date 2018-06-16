@extends('adminlte::page')

@section('title', 'UAC-Ancud')


@section('content')

<div class="col-sm-6" >


<div class="form-group">

    <a href="{{route('autores.index')}}" class="btn btn-primary">Volver al Index</a>
                
</div>

<h1>{{$author->nombre}} {{$author->apellidos}}</h1>

{!! Form::model($author, ['method'=>'GET', 'action'=> ['UserAutoresController@show', $author->id],'files'=>true]) !!}


{!! Form::close() !!}

</div>
<div class="col-sm-12" >

<h2>Listado de Tesis asociadas al autor</h2>

<table class="data-table">
        <thead>
            <tr>
                <th>Portada</th>
                <th>Título</th>
                <th>Año</th>
                <th>Título al que postula</th>
                <th>Docente Guía</th>
            </tr>
        </thead>
        <tbody>
            @foreach($author->papers as $paper)
            <tr>
                <td> <img height="150" src="{{$paper->photo ? $paper->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{route('tesis.show', ['id' => $paper->id])}}">{{$paper->titulo}}</a></td>
                <td>{{$paper->año}}</td>
                <td>{{$paper->title->nombre}}</td>
                <td>{{$paper->teacher->nombre}}</td>
            </tr>
            @endforeach

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
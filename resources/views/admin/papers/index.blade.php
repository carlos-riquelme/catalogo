@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Listado de Tesis registradas en el Sistema</h1>

@if(Session::has('deleted_paper'))

        <p class="bg-danger">{{session('deleted_paper')}}</p>

@endif

@if(Session::has('created_paper'))

        <p class="bg-danger">{{session('created_paper')}}</p>

@endif

@if(Session::has('updated_paper'))

        <p class="bg-danger">{{session('updated_paper')}}</p>

@endif

@if(Session::has('existing_user'))

        <p class="bg-danger">{{session('existing_user')}}</p>

@endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Portada</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Título al que postula</th>
                <th>Docente Guía</th>
                {{--<th>Tesis</th>  --}}
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($papers)
            @foreach($papers as $paper)
            <tr>
                <td>{{$paper->id}}</td>
                <td> <img height="150" src="{{$paper->photo ? $paper->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{route('papers.edit', ['id' => $paper->id])}}">{{$paper->titulo}}</a></td>
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
                <td>{{$paper->title->nombre}}</td>
                <td>{{$paper->teacher->nombre}}</td>
                <td>{{$paper->created_at->diffForHumans()}}</td>
                <td>{{$paper->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
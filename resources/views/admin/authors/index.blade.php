@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Listado de Autores registrados en el Sistema</h1>

@if(Session::has('deleted_author'))

        <p class="bg-danger">{{session('deleted_author')}}</p>

@endif

@if(Session::has('created_author'))

        <p class="bg-danger">{{session('created_author')}}</p>

@endif

@if(Session::has('updated_author'))

        <p class="bg-danger">{{session('updated_author')}}</p>

@endif
{{ $authors->links() }}
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Tesis</th>
                {{--  <th>Tesis</th>  --}}
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($authors)
            @foreach($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td><a href="{{route('authors.edit', ['id' => $author->id])}}">{{$author->nombre}}</a></td>
                <td>{{$author->apellidos}}</td>
                {{--  <td>{{$author->papers->titulo}}</td>  --}}
                
                <td>
                @if($author->papers)

                    @foreach($author->papers as $paper)
                        <a href="{{route('papers.edit', ['id' => $paper->id])}}">{{$paper->titulo}}</a>
                    @endforeach

                @else
                    "No tiene Tesis registradas."
                @endif
                </td>    
                
                {{--  <td>{{$author->is_active == 1 ? 'Activo' : 'Inactivo'}}</td>  --}}
                <td>{{$author->created_at->diffForHumans()}}</td>
                <td>{{$author->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>
{{ $authors->links() }}
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Listado de Carreras registradas en el Sistema</h1>

@if(Session::has('deleted_title'))

        <p class="bg-danger">{{session('deleted_title')}}</p>

@endif

@if(Session::has('created_title'))

        <p class="bg-danger">{{session('created_title')}}</p>

@endif

@if(Session::has('updated_title'))

        <p class="bg-danger">{{session('updated_title')}}</p>

@endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad de Tesis</th>
                {{--  <th>Carrera</th>
                <th>Tesis</th>  --}}
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($titles)
            @foreach($titles as $title)
            <tr>
                <td>{{$title->id}}</td>
                <td><a href="{{route('titles.edit', ['id' => $title->id])}}">{{$title->nombre}}</a></td>
                <td>"Cantidad de Tesis por carrera"</td>
                {{--  <td>{{$author->role->name}}</td>
                <td>{{$author->is_active == 1 ? 'Activo' : 'Inactivo'}}</td>  --}}
                <td>{{$title->created_at->diffForHumans()}}</td>
                <td>{{$title->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
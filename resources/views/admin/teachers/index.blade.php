@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Listado de Docentes registrados en el Sistema</h1>

@if(Session::has('deleted_teacher'))

        <p class="bg-danger">{{session('deleted_teacher')}}</p>

@endif

@if(Session::has('created_teacher'))

        <p class="bg-danger">{{session('created_teacher')}}</p>

@endif

@if(Session::has('updated_teacher'))

        <p class="bg-danger">{{session('updated_teacher')}}</p>

@endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Cantidad de Tesis</th>
                {{--  <th>Carrera</th>
                <th>Tesis</th>  --}}
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        @if($teachers)
            @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td><a href="{{route('teachers.edit', ['id' => $teacher->id])}}">{{$teacher->nombre}}</a></td>
                <td>{{$teacher->tipo}}</td>
                <td>"Cantidad de Tesis que tiene el Docente"</td>
                <td>{{$teacher->created_at->diffForHumans()}}</td>
                <td>{{$teacher->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
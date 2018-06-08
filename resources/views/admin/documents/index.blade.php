@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Listado de Tesis registradas en el Sistema</h1>

@if(Session::has('deleted_document'))

        <p class="bg-danger">{{session('deleted_document')}}</p>

@endif

@if(Session::has('created_document'))

        <p class="bg-danger">{{session('created_document')}}</p>

@endif

@if(Session::has('updated_document'))

        <p class="bg-danger">{{session('updated_document')}}</p>

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
        @if($documents)
            @foreach($documents as $document)
            <tr>
                <td>{{$document->id}}</td>
                <td><a href="{{route('document.edit', ['id' => $document->id])}}">{{$document->nombre}}</a></td>
                <td>{{$document->tipo}}</td>
                <td>"Cantidad de Tesis que tiene el Docente"</td>
                <td>{{$document->created_at->diffForHumans()}}</td>
                <td>{{$document->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@stop
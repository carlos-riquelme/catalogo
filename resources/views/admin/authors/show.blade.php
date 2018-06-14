@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Visualización de Autor</h1>

{!! Form::model($author, ['method'=>'GET', 'action'=> ['AdminAuthorsController@show', $author->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['readonly','class'=> 'form-control']) !!}
            
</div>

<div class="form-group" >
    
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['readonly', 'class'=> 'form-control']) !!}
            
</div>

<div class="form-group">

    {{--  {!! Form::button('Volver', ['class'=> 'btn btn-primary']) !!}  --}}
    <a href="{{route('authors.index')}}" class="btn btn-primary">Index</a>
    <a href="{{route('authors.edit', ['id' => $author->id])}}" class="btn btn-primary">Editar</a>
                
</div>
{!! Form::close() !!}


@include('includes.form_error')
</div>
<div class="col-sm-12" >

<h2>Listado de Tesis asociadas al autor</h2>

<table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Portada</th>
                <th>Título</th>
                {{--  <th>Autor</th>  --}}
                <th>Año</th>
                <th>Título al que postula</th>
                <th>Docente Guía</th>
                {{--<th>Tesis</th>  --}}
                <th>Fecha de registro</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
        {{--  @if($papers)  --}}
            @foreach($author->papers as $paper)
            <tr>
                <td>{{$paper->id}}</td>
                <td> <img height="150" src="{{$paper->photo ? $paper->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{route('papers.edit', ['id' => $paper->id])}}">{{$paper->titulo}}</a></td>
                {{--  <td>
                    @if($paper->authors)

                    @foreach($paper->authors as $author)
                        <a href="{{route('authors.edit', ['id' => $author->id])}}">{{$author->nombre}}   {{$author->apellidos}}</a>
                    @endforeach

                    @else
                    "No tiene autor asignado."
                    @endif
                </td>  --}}
                <td>{{$paper->año}}</td>
                <td>{{$paper->title->nombre}}</td>
                <td>{{$paper->teacher->nombre}}</td>
                <td>{{$paper->created_at->diffForHumans()}}</td>
                <td>{{$paper->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        {{--  @endif  --}}

        </tbody>
    </table>

</div>
@stop
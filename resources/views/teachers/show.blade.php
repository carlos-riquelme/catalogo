@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Visualización de Docente</h1>

{!! Form::model($teacher, ['method'=>'GET', 'action'=> ['AdminTeachersController@show', $teacher->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['readonly', 'class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
            {!! Form::label('tipo', 'Tipo:') !!}
            {!! Form::select('tipo', array("Guía" => 'Guía', "Evaluador"=> 'Evaluador'), null , ['readonly', 'class'=> 'form-control']) !!}
</div>


<div class="form-group">

    
     {{--  {!! Form::submit('Actualizar Docente', ['class'=> 'btn btn-primary col-sm-3']) !!}  --}}
     
     <a href="{{route('teachers.index')}}" class="btn btn-success col-sm-3">Index</a>
     <a href="{{route('teachers.edit', ['id' => $teacher->id])}}" class="btn btn-primary col-sm-3">Editar</a>
     
    
</div>


{!! Form::close() !!}


@include('includes.form_error')
</div>

<div class="col-sm-12" >

<h2>Listado de Tesis asociadas al docente</h2>

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

</div>
@stop

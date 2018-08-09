@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Vista de Tesis</h1>
<h2>Autores:</h2>
{!! Form::model($papers, ['method'=>'GET', 'action'=> ['AdminPapersController@show', $papers->id],'files'=>true]) !!}

@if($papers->authors)
@foreach($papers->authors as $author)
<h3>{{$author->nombre}} {{$author->apellidos}}</h3>
@endforeach
@endif

<div class="col-sm-3">


            <img src="{{$papers->photo ? $papers->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


</div>

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['readonly', 'class'=> 'form-control']) !!}
            
</div>

{{--  <div class="form-group">
            {!! Form::label('photo_id', 'Portada:') !!}
            {!! Form::file('photo_id', null, ['readonly', 'class'=>'form-control'])!!}
</div>  --}}

{{--  <div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group" >
    
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class'=> 'form-control']) !!}
            
</div>  --}}

<div class="form-group" >
    
    {!! Form::label('codigo', 'Código:') !!}
    {!! Form::text('codigo', null, ['readonly', 'class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
    
    {!! Form::label('año', 'Año:') !!}
    {{--  {!! Form::selectYear('año', 2018, 2010, ['readonly', 'class'=> 'form-control']) !!}  --}}
    {!! Form::text('año', null, ['readonly', 'class'=> 'form-control']) !!}
    
    
</div>
<div class="form-group">
    
    {!! Form::label('title_id', 'Título al que postula:') !!}
    {{--  {!! Form::select('title_id', $titles, null, ['readonly', 'class'=> 'form-control']) !!}  --}}
    {!! Form::text('title_id', $papers->title ? $papers->title->nombre : 'Sin asignar', ['readonly', 'class'=> 'form-control']) !!}
    
    
</div>

<div class="form-group">
    
    {!! Form::label('teacher_id', 'Docente Guía:') !!}
    {{--  {!! Form::select('teacher_id', $teachers, null, ['readonly', 'class'=> 'form-control']) !!}  --}}
    {!! Form::text('teacher_id', $papers->teacher ? $papers->teacher->nombre : 'Sin asignar', ['readonly', 'class'=> 'form-control']) !!}
    
    
</div>


<div class="form-group">

    
    {{--  {!! Form::submit('Actualizar Tesis', ['class'=> 'btn btn-primary col-sm-3']) !!}  --}}
    <a href="{{route('papers.index') }}" class="btn btn-success">Index</a>
    <a href="{{route('papers.edit', ['id' => $papers->id])}}" class="btn btn-primary">Editar</a>
    
</div>


{!! Form::close() !!}

</div>
@stop
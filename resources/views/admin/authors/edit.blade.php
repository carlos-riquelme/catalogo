@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Acualización de Autor</h1>

{!! Form::model($author, ['method'=>'PATCH', 'action'=> ['AdminAuthorsController@update', $author->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group" >
    
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class'=> 'form-control']) !!}
            
</div>


<div class="form-group">

    
     {!! Form::submit('Actualizar User', ['class'=> 'btn btn-primary col-sm-3']) !!}
    
</div>


{!! Form::close() !!}

{{--  #Botón para eliminar al autor  --}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminAuthorsController@destroy', $author->id]]) !!}

        <div class="form-group">
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger col-sm-3']) !!}
        </div>
        
        
        {!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
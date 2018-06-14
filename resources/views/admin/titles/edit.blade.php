@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Actualización de Carrera</h1>

{!! Form::model($title, ['method'=>'PATCH', 'action'=> ['AdminTitlesController@update', $title->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>


<div class="form-group">

    
     {!! Form::submit('Actualizar Carrera', ['class'=> 'btn btn-success col-sm-3']) !!}
     <a href="{{ URL::previous() }}" class="btn btn-primary col-sm-3">Cancelar</a>
    
</div>


{!! Form::close() !!}

{{--  #Botón para eliminar al usuario  --}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTitlesController@destroy', $title->id]]) !!}

        <div class="form-group">
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger col-sm-3']) !!}
        </div>
        
        
        {!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
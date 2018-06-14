@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Actualización de Docente</h1>

{!! Form::model($teacher, ['method'=>'PATCH', 'action'=> ['AdminTeachersController@update', $teacher->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
            {!! Form::label('tipo', 'Tipo:') !!}
            {!! Form::select('tipo', array("Guía" => 'Guía', "Evaluador"=> 'Evaluador'), null , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">

    
     {!! Form::submit('Actualizar Docente', ['class'=> 'btn btn-success col-sm-3']) !!}
     <a href="{{ URL::previous() }}" class="btn btn-primary col-sm-3">Cancelar</a>
    
</div>


{!! Form::close() !!}

{{--  #Botón para eliminar al docente  --}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminTeachersController@destroy', $teacher->id]]) !!}

        <div class="form-group">
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger col-sm-3']) !!}
        </div>
        
        
        {!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
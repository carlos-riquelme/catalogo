@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')



<h1>Edición de Tesis</h1>

{!! Form::model($papers, ['method'=>'PATCH', 'action'=> ['AdminPapersController@update', $papers->id],'files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
            {!! Form::label('photo_id', 'Portada:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
</div>

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
    {!! Form::text('codigo', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
    
    {!! Form::label('año', 'Año:') !!}
    {!! Form::selectYear('año', 2018, 2010, ['class'=> 'form-control']) !!}
    
    
</div>
<div class="form-group">
    
    {!! Form::label('title_id', 'Título al que postula:') !!}
    {!! Form::select('title_id', ['' => 'Escoger'] + $titles, null, ['class'=> 'form-control']) !!}
    
    
</div>

<div class="form-group">
    
    {!! Form::label('teacher_id', 'Docente Guía:') !!}
    {!! Form::select('teacher_id', ['' => 'Escoger'] + $teachers, null, ['class'=> 'form-control']) !!}
    
    
</div>


<div class="form-group">

    
    {!! Form::submit('Actualizar Tesis', ['class'=> 'btn btn-primary col-sm-3']) !!}
    
</div>


{!! Form::close() !!}

{{--  #Botón para eliminar al autor  --}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPapersController@destroy', $papers->id]]) !!}

        <div class="form-group">
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger col-sm-3']) !!}
        </div>
        
        
        {!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
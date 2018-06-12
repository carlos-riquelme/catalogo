@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Ingreso de Tesis al Sistema</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminPapersController@store','files'=>true]) !!}

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

    
    {!! Form::submit('Registrar Tesis', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>

{{--  <div class="col-sm-6" >

<h3>Agregar Autor:</h3>

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group" >
    
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class'=> 'form-control']) !!}
            
</div>
    
</div>  --}}



@stop
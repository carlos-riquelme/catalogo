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
    
    {!! Form::label('titles_idtitles', 'Título al que postula:') !!}
    {!! Form::select('titles_idtitles', ['' => 'Escoger'] + $titles, null, ['class'=> 'form-control']) !!}
    
    
</div>

<div class="form-group">
    
    {!! Form::label('teachers_idteachers', 'Docente Guía:') !!}
    {!! Form::select('teachers_idteachers', ['' => 'Escoger'] + $teachers, null, ['class'=> 'form-control']) !!}
    
    
</div>


<div class="form-group">

    
    {!! Form::submit('Registrar Tesis', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>

<div class="col-sm-3" >

<h3>Consejo:</h3>

<ul>
<li>
<p>Si la tesis que busca ingresar tiene más de un autor, ingrese al primero que figura en la portada y luego agregue a los otros en el panel de creación de autores.</p>
</li>
<li>
<p>El código contempla la abreviatura de la carrera y las iniciales de los nombres del alumno. Ejemplo: TENS CERR.</p>
</li>
</ul>        
</div>



@stop
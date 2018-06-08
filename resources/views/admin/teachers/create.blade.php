@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Ingreso de Docente al Catálogo</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminTeachersController@store','files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', array("Guía" => 'Guía', "Evaluador"=> 'Evaluador'), 0 , ['class'=> 'form-control']) !!}
</div>

<div class="form-group">

    
    {!! Form::submit('Ingresar Docente', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
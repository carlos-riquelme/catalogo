@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Ingreso de Carrera al Catálogo</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminTitlesController@store','files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
            
</div>


<div class="form-group">

    
    {!! Form::submit('Ingresar Carrera', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
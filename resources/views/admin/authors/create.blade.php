@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Ingreso de Autor al Catálogo</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminAuthorsController@store','files'=>true]) !!}

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
    
    {!! Form::label('paper_id', 'Asociar a Tesis:') !!}
    {!! Form::select('paper_id', ['' => 'Seleccionar'] + $papers, null, ['class'=> 'form-control']) !!}
    
    
</div>
{{--  
<div class="form-group">
    {!! Form::label('is_active', 'Estado:') !!}
    {!! Form::select('is_active', array(1 => 'Activo', 0=> 'Inactivo'), 0 , ['class'=> 'form-control']) !!}
</div>  --}}



<div class="form-group">

    
    {!! Form::submit('Ingresar Autor', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>

@stop
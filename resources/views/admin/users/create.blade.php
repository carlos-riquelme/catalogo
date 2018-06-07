@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Creación de Usuarios del Sistema</h1>

{!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

<div class="col-sm-6" >

<div class="form-group" >
    
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=> 'form-control']) !!}
            
</div>

<div class="form-group">
    
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class'=> 'form-control']) !!}
    
    
</div>
 <div class="form-group">
    
    {!! Form::label('role_id', 'Rol:') !!}
    {!! Form::select('role_id', ['' => 'Escoger'] + $roles, null, ['class'=> 'form-control']) !!}
    
    
</div>
<div class="form-group">
    {!! Form::label('is_active', 'Estado:') !!}
    {!! Form::select('is_active', array(1 => 'Activo', 0=> 'Inactivo'), 0 , ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class'=> 'form-control']) !!}
</div>

<div class="form-group">

    
    {!! Form::submit('Crear Usuario', ['class'=> 'btn btn-primary']) !!}
    
</div>


{!! Form::close() !!}

@include('includes.form_error')
</div>



@stop
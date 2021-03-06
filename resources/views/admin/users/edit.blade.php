@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<h1>Edición de Usuario del Sistema</h1>

<div class="col-sm-9">
    
    {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}

        <div class="form-group">
            
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                    
        </div>

        <div class="form-group">
            
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=> 'form-control']) !!}
            
            
        </div>
         <div class="form-group">
            
            {!! Form::label('role_id', 'Rol:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=> 'form-control']) !!}
            
            
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Estado:') !!}
            {!! Form::select('is_active', array(1 => 'Activo', 0=> 'Inactivo'), null , ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña:') !!}
            {!! Form::password('password', ['class'=> 'form-control']) !!}
        </div>

        <div class="form-group">
        
            
            {!! Form::submit('Actualizar User', ['class'=> 'btn btn-primary col-sm-3']) !!}
            
        </div>

        
        {!! Form::close() !!}

        {{--  #Botón para eliminar al usuario  --}}
        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group">
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger col-sm-3']) !!}
        </div>
        
        
        {!! Form::close() !!}
        
        
    
        @include('includes.form_error')

        </div>

@stop
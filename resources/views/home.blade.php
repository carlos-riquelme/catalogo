@extends('adminlte::page')

@section('title', 'UAC-Ancud')

@section('content_header')

{{--  <h1>Panel de Control</h1>  --}}

@stop

@section('content')

    <h3>Bienvenido al Catálogo de Consulta de Tesis y Tesinas de la Universidad de Aconcagua Sede Ancud</h3>
<div class="row">
<div class="col-sm-3">
<!-- /.info-box -->
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('autores.index')}}"><i class="fa fa-user"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Autores</span>
    <span class="info-box-number">{{ $authors->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div class="col-sm-3">
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('titulos.index')}}"><i class="fa fa-graduation-cap"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Carreras</span>
    <span class="info-box-number">{{ $titles->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
</div>

<div class="col-sm-3">
<!-- /.info-box -->
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('docentes.index')}}"><i class="fa fa-user-circle"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Docentes</span>
    <span class="info-box-number">{{ $teachers->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div class="col-sm-3">
<!-- /.info-box -->
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('tesis.index')}}"><i class="fa fa-file-text-o"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Tesis</span>
    <span class="info-box-number">{{ $papers->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>

</div>

<div class="row">
<div class="col-sm-12">
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Últimas tesis ingresadas</h3>
    <div class="box-tools pull-right">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-box-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove">
        <i class="fa fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Título al que postula</th>
                <th>Docente Guía</th>
            </tr>
        </thead>
        <tbody>
        @if($lt5_papers)
        @foreach($lt5_papers as $lt5_paper)
        <tr>
                <td><a href="{{route('tesis.show', ['id' => $lt5_paper->id])}}">{{str_limit($lt5_paper->titulo, $limit = 80, $end = '...')}}</a></td>
                <td>
                    @if($lt5_paper->authors)

                    @foreach($lt5_paper->authors as $author)
                        <a href="{{route('autores.show', ['id' => $author->id])}}">{{$author->nombre}}   {{$author->apellidos}}</a>
                    @endforeach

                    @else
                    "No tiene autor asignado."
                    @endif
                </td>
                <td>{{$lt5_paper->año}}</td>
                <td>{{$lt5_paper->title->nombre}}</td>
                <td>{{$lt5_paper->teacher->nombre}}</td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <span class="label"><a href="{{route('tesis.index')}}">Ver todas las Tesis</a></span>
  </div>
  <!-- box-footer -->
</div>
<!-- /.box -->
</div>
</div>

@stop

@section('css')

<link rel="stylesheet" href="/css/admin_custom.css">

@stop


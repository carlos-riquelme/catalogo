@extends('adminlte::page')

@section('title', 'UAC-Ancud')

@section('content_header')

{{--  <h1>Panel de Control</h1>  --}}

@stop

@section('content')

    <h3>Bienvenido al panel de administración del Catálogo de Consulta de Tesis y Tesinas de la Universidad de Aconcagua Sede Ancud</h3>
<div class="row">
<div class="col-sm-3">
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('titles.index')}}"><i class="fa fa-graduation-cap"></i></a></span>
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
  <span class="info-box-icon bg-white"><a href="{{route('authors.index')}}"><i class="fa fa-user"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Autores</span>
    <span class="info-box-number">{{ $authors->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div class="col-sm-3">
<!-- /.info-box -->
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('papers.index')}}"><i class="fa fa-file-text-o"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Tesis</span>
    <span class="info-box-number">{{ $papers->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div class="col-sm-3">
<!-- /.info-box -->
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-white"><a href="{{route('teachers.index')}}"><i class="fa fa-user-circle"></i></a></span>
  <div class="info-box-content">
    <span class="info-box-text">Docentes</span>
    <span class="info-box-number">{{ $teachers->count() }}</span>
  </div>
  <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
</div>
<div class="row">
{{--  <div class="col-sm-3">
<div class="box box-solid box-primary">

  <div class="box-header with-border ">
    <h3 class="box-title">Última Carrera Ingresada</h3>
    <div class="box-tools pull-right">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-box-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <a href="{{route('titles.show', ['id' => $lt_title->id])}}">{{$lt_title->nombre}}</a>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <span class="label"><a href="{{route('titles.index')}}">Ver todas</a></span>
  </div>
  <!-- box-footer -->
</div>
</div>
<!-- /.box -->  --}}
{{--  <div class="col-sm-4">
<div class="box box-solid box-primary">

  <div class="box-header with-border ">
    <h3 class="box-title">Último Autor Ingresado</h3>
    <div class="box-tools pull-right">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-box-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
     <a href="{{route('authors.show', ['id' => $lt_author->id])}}">{{$lt_author->nombre}} {{$lt_author->apellidos}}</a>
  </div>
  <!-- /.box-body -->
      <div class="box-footer">
    <span class="label"><a href="{{route('authors.index')}}">Ver todos</a></span>
  </div>
  <!-- box-footer -->
</div>
</div>
<!-- /.box -->
<div class="col-sm-4">
<div class="box box-solid box-primary">

  <div class="box-header with-border ">
    <h3 class="box-title">Última Tesis Ingresada</h3>
    <div class="box-tools pull-right">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-box-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <a href="{{route('papers.show', ['id' => $lt_paper->id])}}">{{$lt_paper->titulo}}</a>
  </div>
  <!-- /.box-body -->
      <div class="box-footer">
    <span class="label"><a href="{{route('papers.index')}}">Ver todas</a></span>
  </div>
  <!-- box-footer -->
</div>
</div>
<!-- /.box -->  --}}
{{--  <div class="col-sm-3">
<div class="box box-solid box-primary">

  <div class="box-header with-border ">
    <h3 class="box-title">Último Docente Ingresado</h3>
    <div class="box-tools pull-right">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-box-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
    </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <a href="{{route('teachers.show', ['id' => $lt_teacher->id])}}">{{$lt_teacher->nombre}}</a>
  </div>
  <!-- /.box-body -->
    <div class="box-footer">
    <span class="label"><a href="{{route('teachers.index')}}">Ver todos</a></span>
  </div>
  <!-- box-footer -->
</div>
</div>
<!-- /.box -->  --}}
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
                <td><a href="{{route('papers.show', ['id' => $lt5_paper->id])}}">{{str_limit($lt5_paper->titulo, $limit = 80, $end = '...')}}</a></td>
                <td>
                    @if($lt5_paper->authors)

                    @foreach($lt5_paper->authors as $author)
                        <a href="{{route('authors.edit', ['id' => $author->id])}}">{{$author->nombre}}   {{$author->apellidos}}</a>
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
    <span class="label"><a href="{{route('papers.index')}}">Ver todas las Tesis</a></span>
  </div>
  <!-- box-footer -->
</div>
<!-- /.box -->
</div>
</div>

    {{--  <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Randomly Generated Tasks</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @foreach($titles as $title)
                        <h5>
                            {{ $title->count() }}
                            <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}%</small>
                        </h5>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
                        </div>
                    @endforeach

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->  --}}

@stop

@section('css')

<link rel="stylesheet" href="/css/admin_custom.css">

@stop


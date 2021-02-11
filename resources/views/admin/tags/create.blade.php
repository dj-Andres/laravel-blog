@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Creación de Etiquetas</h1>
@stop
@section('content')
@if (session('info'))
<div class="alert alert-success mt-2" role="alert">
    <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
</div>
@endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Crear nueva Etiqueta</h5>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'admin.tags.store']) !!}
                
                @include('admin.tags.partials.form')

                {!! Form::submit('Guardar Etiqueta', ['class'=>'btn btn-primary btn-lg btn-block pt-2 mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
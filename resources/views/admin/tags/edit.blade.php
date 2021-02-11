@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Modificar Etiquetas</h1>
@stop
@section('content')
    @if (session('info'))
    <div class="alert alert-success mt-2" role="alert">
        <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=>['admin.tags.update', $tag],'method'=>'PUT']) !!}

                @include('admin.tags.partials.form')
            
            {!! Form::submit('Actualizar Etiqueta', ['class'=>'btn btn-success btn-lg btn-block pt-2 mt-2']) !!}

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

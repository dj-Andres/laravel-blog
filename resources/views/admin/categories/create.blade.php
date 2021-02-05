@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Crear nueva Categoria</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success mt-2" role="alert">
        <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.categories.store']) !!}
                <div class="input-gorup">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoria']) !!}

                    @error('nombre')
                      <div class="alert alert-danger mt-2" role="alert">
                            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                       </div>
                    @enderror

                </div>
                <div class="input-gorup">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingrese el slug de la categoria','readonly']) !!}

                    @error('slug')
                      <div class="alert alert-danger mt-2" role="alert">
                            <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                       </div>
                    @enderror

                </div>
                
                {!! Form::submit('Crear Categoria', ['class'=>'btn btn-primary btn-lg btn-block pt-2 mt-2']) !!}
                
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
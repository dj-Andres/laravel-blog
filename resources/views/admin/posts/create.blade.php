@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Crear un Nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="input-gorup">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la publicación']) !!}

                @error('nombre')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror

            </div>

            <div class="input-gorup">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingrese el nombre el slug','readonly']) !!}

                @error('slug')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

                @error('category_id')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror

            </div>

            <div class="form-group">
                <p class="font-weight-bold">Etiquetas</p>

                @foreach ($tags as $tag)
                    <label class="mr-2">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->nombre }}
                    </label>
                @endforeach
                
                @error('tags')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror

            </div>

            <div class="form-group">
                <p class="font-weight-bold">Estado</p>

                <label class="mr-2">
                    {!! Form::radio('status', 0, true) !!}
                    Borrador
                </label>

                <label>
                    {!! Form::radio('status', 1) !!}
                    Publicado
                </label>
                
                @error('status')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

                @error('extract')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Cuerpo') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

                @error('body')
                  <div class="alert alert-danger mt-2" role="alert">
                        <span><i class="fas fa-times m-1"></i>{{ $message }}</span>
                   </div>
                @enderror
            </div>

            {!! Form::submit('Publicar', ['class'=>'btn btn-primary btn-lg btn-block pt-2 mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>    
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );    
    </script>
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
@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Crear un Nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off','files'=> true]) !!}

                @include('admin.posts.partials.form')
            
            {!! Form::submit('Publicar', ['class'=>'btn btn-primary btn-lg btn-block pt-2 mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>    
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            border-radius: 7px;
            border: 2px solid blueviolet;
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
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

        const file = document.getElementById('file');
        const image = document.getElementById('picture');
        
        file.addEventListener('change',changeImage);

        function changeImage(event){
            let file = event.target.files[0];
            let reader = new FileReader();

            reader.onload=(event)=>{
                image.setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
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
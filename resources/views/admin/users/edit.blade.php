@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Asignar Rol</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success mt-2" role="alert">
        <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{ $user->name }}</p>
            <h2 class="h5">Tipos de Roles</h2>
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method' => 'PUT']) !!}
                @foreach ($rols as $rol)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                            {{ $rol->name }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Rol', ['class'=>'btn btn-success btn-lg btn-block pt-2 mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

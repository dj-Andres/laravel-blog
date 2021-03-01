@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-success btn-lg btn-block pt-2 mt-2">Nuevo Post</a>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success mt-2" role="alert">
        <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
    </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

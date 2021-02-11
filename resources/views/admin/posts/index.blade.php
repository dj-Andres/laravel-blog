@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-success btn-lg btn-block pt-2 mt-2">Nuevo Post</a>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

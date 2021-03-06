@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Contenido de las Etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success mt-2" role="alert">
        <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            @can('admin.tags.create')
                <a href="{{ route('admin.tags.create') }}" class="btn btn-outline-success">Nueva Etiqueta</a>
            @endcan
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->nombre }}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-warning" title="Modificar"><i class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" title="Eliminar" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop



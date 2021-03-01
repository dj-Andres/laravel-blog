@extends('adminlte::page')

@section('title', 'Dj-Andres')

@section('content_header')
    <h1>Listar Categorias</h1>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success mt-2" role="alert">
            <span><i class="fas fa-check m-1"></i>{{ session('info') }}</span>
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                @can('admin.categories.create')
                    <a href="{{ route('admin.categories.create')}}" class="btn btn-outline-success">Crear Categoria</a>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-primary">
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->nombre }}</td>
                                <td width="10px">
                                    @can('admin.categories.edit')
                                        <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-warning">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('admin.categories.destroy')
                                        <form action="{{ route('admin.categories.destroy',$category) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
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


<div class="card">
    <div class="card-header">
        <input  wire:model="search" class="form-control" placeholder="Ingresar el nombre del Post">
    </div>

    @if ($posts->count())
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
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->nombre }}</td>
                        <td widt="10px">
                            <a class="btn btn-warning" href="{{ route('admin.posts.edit',$post)}}">Editar</a>
                        </td>
                        <td widt="10px">
                            <form action="" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            <strong>No existe registro</strong>
        </div>
    </div>
    @endif
</div>

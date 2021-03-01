<div>
    <div class="card">
        <div class="card-header">
            <input class="form-control" placeholder="Buscar Usuario" wire:model="search">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a class="btn btn-warning" href="{{ route('admin.users.edit',$user) }}">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong class="alert alert-default-info">No existe el registro solicitado</strong>
            </div>
        @endif
    </div>
</div>

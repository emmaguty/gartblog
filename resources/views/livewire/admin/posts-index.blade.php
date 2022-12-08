<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del post">
    </div>

    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
    
                                    <button class="btn btn-danger" type="submit">Borrar</button>
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
        <strong class="card-body"> No existe ningún registro relacionado con tu búsqueda :c</strong>
    @endif
</div>

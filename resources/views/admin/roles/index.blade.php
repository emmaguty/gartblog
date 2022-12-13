@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-primary btn-sm float-right" href="{{route('admin.roles.create')}}">Nueva rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td width="10px">
                                <a href="{{route('admin.roles.edit', $rol)}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.roles.destroy', $rol)}}" method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
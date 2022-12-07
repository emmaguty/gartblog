@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="btn btn-primary float-right" href="{{route('admin.posts.create')}}">Nuevo Post!</a>

    <h1>Listado de Post</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
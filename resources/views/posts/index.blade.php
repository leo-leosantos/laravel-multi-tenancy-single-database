@extends('layouts.app')


@section('content')


@include('posts._alerts.alerts')

<a href="{{ route('posts.create') }}" class="btn btn-success">Cadastrar new Post</a>

    @forelse($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->user->name }}</p>
        <p>{{ $post->created_at }}</p>

        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Visualizar</a>

        <hr>
    @empty

    <p>Nenhum post encontrado</p>
    @endforelse

@endsection

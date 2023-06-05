@extends('layouts.app')


@section('content')


@include('posts._alerts.alerts')

    @forelse($posts as $post)
        <p>{{ $post->title }}</p>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
        <hr>
    @empty

    <p>Nenhum post encontrado</p>
    @endforelse

@endsection

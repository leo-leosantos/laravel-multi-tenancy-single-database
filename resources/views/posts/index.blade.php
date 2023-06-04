@extends('layouts.app')


@section('content')

    @forelse($posts as $post)
        <p>{{ $post->title }}</p>
    @empty

    <p>Nenhum post encontrado</p>
    @endforelse

@endsection

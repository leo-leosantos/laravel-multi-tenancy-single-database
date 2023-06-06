@extends('layouts.app')


@section('content')


<h1>Detalhes do post <b>{{ $post->title }}</b></h1>



<img src='{{ url("storage/tenants/{auth()->user()->tenant->uuid}/$post->image") }}'>

<p>{{ $post->body }}</p>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Deletar</button>
</form>
@endsection

@extends('layouts.app')


@section('content')



<h1>Cadastrar Post</h1>


@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
@if(session('success'))
        <div class="alert alert-success">
           {{ session('success') }}
        </div>
@endif
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <input class="form-control" type="text" name="title"  placeholder="title">

    </div>

    <div class="form-group">
        <input class="form-control" type="file" name="image">

    </div>

    <div class="form-group">

        <textarea class="form-control"  name="body" id="" cols="30" rows="10">

        </textarea>
    </div>

    <div class="form-group">


        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>
@endsection

@extends('layouts.dashboard')

@section('content')
    <h1>Lista di tuoi post</h1>

    <div class="row row-cols-3">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Leggi post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
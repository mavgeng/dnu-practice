@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Posts in Category: {{ $category->title }}</h2>
        <div class="card-deck">
            @foreach($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">By {{ $post->author }}</h6>
                        <p class="card-text">{{ Str::limit($post->content, 50, '...') }}</p>
                        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-outline-dark">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

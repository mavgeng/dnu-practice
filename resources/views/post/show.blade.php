@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <h6 class="card-subtitle mb-2 text-muted">By {{ $post->author }}</h6>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><strong>Category:</strong> {{ $post->category }}</p>
                <p class="card-text"><strong>Keywords:</strong> {{ $post->keywords }}</p>
                <p class="card-text"><strong>Likes:</strong> {{ $post->likes }}</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <form action="{{ route('post.editPage', ['post' => $post->id]) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-dark">Edit Post</button>
        </form>
    </div>
@endsection

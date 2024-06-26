@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <h6 class="card-subtitle mb-2 text-muted">By {{ $post->author }}</h6>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><strong>Category:</strong> {{ $category->title }}</p>
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

    <div class="container mt-4">
        <form action="{{ route('post.delete', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
        </form>
    </div>
@endsection

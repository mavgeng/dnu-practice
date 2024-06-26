@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Latest News</h2>
        <div class="news-list">
            @foreach($posts as $post)
                <div class="news-item">
                    <h3 class="news-title">{{ $post->title }}</h3>
                    <p class="news-summary">{{ Str::limit($post->content, 50, '...') }}</p>

                    <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-outline-dark">Read more</a>
                </div>
            @endforeach
        </div>

        {{-- Button for creating post --}}
        <form action="{{ route('post.storePage') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-dark">Create Post</button>
        </form>
    </div>
@endsection

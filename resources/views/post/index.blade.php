@extends('layouts.app')

@section('content')
    <h2>Latest News</h2>
    <div class="news-list">
        <div class="news-item">
            <h3 class="news-title">News Title 1</h3>
            <p class="news-summary">Summary of the news article goes here. This is a brief description.</p>
        </div>
        <div class="news-item">
            <h3 class="news-title">News Title 2</h3>
            <p class="news-summary">Summary of the news article goes here. This is a brief description.</p>
        </div>
        <div class="news-item">
            <h3 class="news-title">News Title 3</h3>
            <p class="news-summary">Summary of the news article goes here. This is a brief description.</p>
        </div>
    </div>

    {{-- Button for creating post --}}
    <form action="{{ route('post.storePage') }}" method="GET">
        @csrf
        <button type="submit" class="create-button">Create Post</button>
    </form>
@endsection

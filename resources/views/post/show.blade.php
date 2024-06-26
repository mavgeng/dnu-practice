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
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded" alt="{{ $post->title }}">
            </div>
        </div>
    </div>
@endsection

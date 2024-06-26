@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit Post</h2>
        <form action="{{ route('post.edit', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $post->author) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="6" required>{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" value="{{ old('category', $post->category) }}" required>
            </div>

            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" id="keywords" name="keywords" class="form-control" value="{{ old('keywords', $post->keywords) }}" required>
            </div>

            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
@endsection

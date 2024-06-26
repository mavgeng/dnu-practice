@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Create Post</h2>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" value="{{ old('category') }}" required>
            </div>

            <div class="form-group">
                <label for="keywords">Keywords</label>
                <input type="text" id="keywords" name="keywords" class="form-control" value="{{ old('keywords') }}" required>
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection

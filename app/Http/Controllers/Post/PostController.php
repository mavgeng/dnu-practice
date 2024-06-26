<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("post.index");
    }

    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view("post.show", compact("post"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storePage()
    {
        return view("post.store");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $post = new Post($request->only([
            'title',
            'author',
            'content',
            'category',
            'keywords',
        ]));

        $post->save();
        $post->refresh();

        return redirect()->route('posts.show', ['post' => $post->id]);
    }


}

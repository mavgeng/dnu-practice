<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("post.index", compact("posts"));
    }

    public function show(Post $post)
    {
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
     * Show the form for update the resource.
     */
    public function editPage(Post $post)
    {
        return view("post.edit", compact("post"));
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

        return redirect()->route('post.show', ['post' => $post->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(Post $post, UpdateRequest $request)
    {
        $post->update($request->only([
            'title',
            'author',
            'content',
            'category',
            'keywords',
        ]));
        $post->refresh();

        return redirect()->route('post.show', ['post' => $post->id]);
    }


}

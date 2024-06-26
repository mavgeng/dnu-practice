<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categoriess = Category::all();
        return view("post.index", compact("posts", "categoriess"));
    }

    public function show(Post $post)
    {
        $category = Category::find($post->category_id);
        $categoriess = Category::all();
        return view("post.show", compact("post", "category", "categoriess"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storePage()
    {
        $categoriess = Category::all();
        $categories = Category::pluck('title', 'id');
        return view("post.store", compact("categories", "categoriess"));
    }

    /**
     * Show the form for update the resource.
     */
    public function editPage(Post $post)
    {
        $categoriess = Category::all();
        $categories = Category::pluck('title', 'id');
        return view("post.edit", compact("post", "categories", "categoriess"));
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
            'category_id',
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
            'category_id',
            'keywords',
        ]));
        $post->refresh();

        return redirect()->route('post.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('index');
    }

}

<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function postsByCategory(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->get();
        $categoriess = Category::all();
        return view("post.categoryPosts", compact("posts", "category", "categoriess"));
    }
}

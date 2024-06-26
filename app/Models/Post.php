<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'content',
        'category',
        'keywords',
        'image',
    ];

    protected $casts = [
        'title' => 'string',
        'author' => 'string',
        'content' => 'string',
        'category' => 'string',
        'keywords' => 'string',
        'image' => 'string',
        'likes' => 'integer',
    ];
}

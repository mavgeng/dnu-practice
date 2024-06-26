<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $content
 * @property integer $category_id
 * @property string $keywords
 * @property integer $likes
 */
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'content',
        'category_id',
        'keywords',
        'likes',
    ];

    protected $casts = [
        'title' => 'string',
        'author' => 'string',
        'content' => 'string',
        'category_id' => 'integer',
        'keywords' => 'string',
        'likes' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

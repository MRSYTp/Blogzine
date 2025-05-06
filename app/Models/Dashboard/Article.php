<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{

    protected $fillable = [
        'title',
        'type',
        'body',
        'slug',
        'short_body',
        'thumbnail',
        'tags',
        'author_id',
        'category_id',
        'status'
    ];
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

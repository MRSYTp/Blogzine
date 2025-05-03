<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

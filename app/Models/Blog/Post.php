<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'excerpt',
        'content_id',
    ];

    protected $dates = [
        'published_at',
        'deleted_at',
    ];

    public function scopePublished(Builder $query)
    {
        return $query
            ->whereNotNull('published_at')
            ->whereNull('deleted_at')
            ->orderBy('published_at', 'desc')
            ->get();
    }
}

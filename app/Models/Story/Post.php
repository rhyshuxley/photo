<?php

namespace App\Models\Story;

use App\Models\Story\Category;
use App\Models\Story\Content;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePublished(Builder $query): Collection
    {
        return $query
            ->whereNotNull('published_at')
            ->whereNull('deleted_at')
            ->orderBy('published_at', 'desc')
            ->get();
    }
}

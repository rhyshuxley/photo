<?php

namespace App\Models\Story;

use App\Models\Story\Category;
use App\Models\Story\Content;
use Illuminate\Database\Eloquent\Builder;
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

    protected $with = [
        'category',
        'contents',
    ];

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function primaryContent(): Content
    {
        return $this->hasMany(Content::class)->first();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query
            ->whereNotNull('published_at')
            ->whereNull('deleted_at')
            ->orderBy('published_at', 'desc');
    }

    public function scopeSearch(Builder $query, array $filters): Builder
    {
        return $query
            ->when($filters['search'] ?? false, function ($query, $search) {
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('excerpt', 'like', '%' . $search . '%');
            });
    }
}

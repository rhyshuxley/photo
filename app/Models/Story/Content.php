<?php

namespace App\Models\Story;

use App\Models\Photo\Photo;
use App\Models\Story\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'photo_id',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function photo(): Photo
    {
        return $this->belongsTo(Photo::class)->first();
    }
}

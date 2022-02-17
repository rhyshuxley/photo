<?php

namespace App\Models\Photo;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $table = 'photos';

    protected $fillable = [
        'filename',
        'folder',
        'uri',
        'height',
        'width',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeMain(Builder $query): Builder
    {
        return $query->where('folder', 'main');
    }
}

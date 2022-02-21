<?php

namespace App\Models\Gear;

use App\Models\Photo\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gear extends Model
{
    use HasFactory;

    protected $table = 'gears';

    protected $fillable = [
        'name',
        'order',
        'photo_id',
    ];

    public function photo(): HasOne
    {
        return $this->hasOne(Photo::class, 'id', 'photo_id');
    }
}

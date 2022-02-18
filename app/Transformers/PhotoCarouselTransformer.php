<?php

namespace App\Transformers;

use App\Models\Photo\Photo;
use League\Fractal\TransformerAbstract;

class PhotoCarouselTransformer extends TransformerAbstract
{
    public function transform(Photo $photo)
    {
        return [
            'id' => $photo->id,
            'src' => $photo->uri,
        ];
    }
}

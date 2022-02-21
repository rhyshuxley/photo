<?php

namespace App\Transformers\Photo;

use App\Models\Photo\Photo;
use League\Fractal\TransformerAbstract;

class PhotoMainTransformer extends TransformerAbstract
{
    public function transform(Photo $photo)
    {
        return [
            'src' => $photo->uri,
            'width' => $photo->width,
            'height' => $photo->height,
        ];
    }
}

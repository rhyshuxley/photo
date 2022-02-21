<?php

namespace App\Transformers;

use App\Models\Gear\Gear;
use League\Fractal\TransformerAbstract;

class PhotoGearTransformer extends TransformerAbstract
{
    public function transform(Gear $gear)
    {
        return [
            'id' => $gear->id,
            'photo' => $gear->photo->uri,
            'order' => $gear->order,
            'classes' => 'd-flex ' . $gear->id % 2 ? 'flex-row-reverse' : 'flex-row',
        ];
    }
}

<?php

namespace App\Transformers\Gear;

use App\Models\Gear\Gear;
use League\Fractal\TransformerAbstract;

class GearTransformer extends TransformerAbstract
{
    public function transform(Gear $gear, int $index)
    {
        return [
            'id' => $gear->id,
            'name' => $gear->name,
            'photo' => $gear->photo->uri,
            'order' => $gear->order,
            'classes' => $index % 2 ? 'd-flex flex-row-reverse' : 'd-flex flex-row',
        ];
    }
}

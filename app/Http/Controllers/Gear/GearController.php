<?php

namespace App\Http\Controllers\Gear;

use App\Http\Controllers\Controller;
use App\Models\Gear\Gear;
use App\Transformers\Gear\GearTransformer;
use Illuminate\Support\Collection;

class GearController extends Controller
{
    public function getGear(): Collection
    {
        $gear = Gear::all();

        $gear = $gear->map(function ($gear, $index) {
            return (new GearTransformer)->transform($gear, $index);
        });

        return $gear;
    }
}

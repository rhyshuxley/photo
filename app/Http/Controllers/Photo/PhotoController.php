<?php

namespace App\Http\Controllers\Photo;

use App\Http\Controllers\Controller;
use App\Models\Photo\Photo;
use App\Transformers\PhotoCarouselTransformer;
use App\Transformers\PhotoMainTransformer;
use Illuminate\Support\Collection;

class PhotoController extends Controller
{
    public function getMain(): Collection
    {
        $photos = Photo::select(['id', 'uri', 'width', 'height'])->main()->orderBy('uri')->get();

        $photos = $photos->map(function ($photo){
            return (new PhotoMainTransformer)->transform($photo);
        });

        return $photos;
    }

    public function getCarousel(): Collection
    {
        $photos = Photo::select(['id', 'uri'])->carousel()->get();

        $photos = $photos->map(function ($photo){
            return (new PhotoCarouselTransformer)->transform($photo);
        });

        return $photos;
    }
}

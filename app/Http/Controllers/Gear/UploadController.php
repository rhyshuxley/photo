<?php

namespace App\Http\Controllers\Gear;

use App\Http\Controllers\Controller;
use App\Models\Gear\Gear;
use App\Models\Photo\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Image;

class UploadController extends Controller
{
    protected $location;

    public function __construct()
    {
        $this->location = 'images/';
    }

    public function index(): View
    {
        return view('gear.upload');
    }

    public function upload(Request $request): RedirectResponse
    {
        if ($request->image === null) {
            return redirect()->back()->with('errors', 'No file selected');
        }

        $this->location = Str::of($this->location)->append($request->folder);;

        $image = Image::make($request->file('image'))
            ->resize(740, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->encode('jpg', 90);

        $name = $request->image->getClientOriginalName();

        $path = $this->location . '/' . $name;

        Storage::disk('public')->put(
            $path,
            $image,
        );

        $photo = Auth::user()->photos()->create([
            'filename' => $name,
            'folder' => $request->folder,
            'uri' => $path,
            'height' => $image->height(),
            'width' => $image->width(),
            'user_id' => 1,
        ]);

        Gear::create([
            'name' => $request->name,
            'order' => $request->order,
            'photo_id' => $photo->id,
        ]);

        return redirect()->back()->with('success', $request->name . ' added successfully');
    }
}

<?php

namespace App\Http\Controllers\Photo;

use App\Http\Controllers\Controller;
use App\Models\Photo\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ManageController extends Controller
{
    public function index(): View
    {
        $photos = Photo::orderBy('folder')->orderBy('uri')->get();
        return view('photo.manage', ['photos' => $photos]);
    }

    public function deletePhoto(Request $request): RedirectResponse
    {
        if ($request->photoId === null) {
            return redirect()->back()->with('errors', 'No photo selected');
        }

        $photo = Photo::where('id', $request->photoId)->first();

        if ($photo === null) {
            return redirect()->back()->with('errors', 'No file to remove');
        }

        Storage::disk('public')->delete($photo->uri);
        $photo->delete();

        return redirect()->back()->with('success', $photo->filename . ' deleted!');
    }
}

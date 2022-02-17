<?php

namespace App\Http\Controllers\Photo;


use App\Http\Controllers\Controller;
use App\RHP\Photos\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ManageController extends Controller
{
    public function index(): View
    {
        return view('manage', ['photos' => Photo::all()]);
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
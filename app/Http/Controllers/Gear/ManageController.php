<?php

namespace App\Http\Controllers\Gear;

use App\Http\Controllers\Controller;
use App\Models\Gear\Gear;
use App\Models\Photo\Photo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ManageController extends Controller
{
    public function index(): View
    {
        $gear = Gear::orderBy('order')->get();
        return view('gear.manage', ['gear' => $gear]);
    }

    public function deleteGear(Request $request): RedirectResponse
    {
        if ($request->gearId === null) {
            return redirect()->back()->with('errors', 'No photo selected');
        }

        $gear = Gear::where('id', $request->gearId)->first();

        if ($gear === null) {
            return redirect()->back()->with('errors', 'No gear to remove');
        }

        Storage::disk('public')->delete($gear->photo->uri);
        $gear->photo->delete();
        $gear->delete();

        return redirect()->back()->with('success', $gear->name . ' deleted!');
    }
}

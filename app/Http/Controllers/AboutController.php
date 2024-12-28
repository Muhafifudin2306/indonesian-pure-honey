<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAbout()
    {
        $about = About::latest()->get();
        $aboutTitle = About::where('section', 'title')->first()->content ?? null;
        $aboutDescription = About::where('section', 'description')->first()->content ?? null;
        $aboutImage = About::where('section', 'image')->first()->content ?? null;
        return view('admin.about.index', compact('about', 'aboutTitle', 'aboutDescription', 'aboutImage'));
    }

    public function storeAbout(Request $request)
    {
        $aboutTitle = About::where('section', 'title')->first();
        $aboutTitle->update([
            'content' => $request->input('title')
        ]);
        $aboutDescription = About::where('section', 'description')->first();
        $aboutDescription->update([
            'content' => $request->input('description')
        ]);
        $aboutImage = About::where('section', 'image')->first();

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('about', 'public');
            $aboutImage->update([
                'content' => $image
            ]);
        }

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

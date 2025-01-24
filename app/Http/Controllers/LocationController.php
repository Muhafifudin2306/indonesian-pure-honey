<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexLocation()
    {
        $locationTitle = Location::where('section', 'title')->first()->content ?? null;
        $locationLink = Location::where('section', 'gmaps_link')->first()->content ?? null;
        $locationEmbed = Location::where('section', 'gmaps_embed')->first()->content ?? null;
        return view('admin.location.index', compact('locationTitle', 'locationLink', 'locationEmbed'));
    }

    public function storeLocation(Request $request)
    {
        $locationTitle = Location::where('section', 'title')->first();
        $locationTitle->update([
            'content' => $request->input('title')
        ]);
        $locationLink = Location::where('section', 'gmaps_link')->first();
        $locationLink->update([
            'content' => $request->input('gmaps_link')
        ]);
        $locationEmbed = Location::where('section', 'gmaps_embed')->first();
        $locationEmbed->update([
            'content' => $request->input('gmaps_embed')
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

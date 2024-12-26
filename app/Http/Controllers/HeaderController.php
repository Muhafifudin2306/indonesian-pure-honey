<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexHeader()
    {
        $header = Header::latest()->get();
        $headerLogo = Header::where('section', 'logo')->first()->content ?? null;
        $headerBackground = Header::where('section', 'background')->first()->content ?? null;
        return view('admin.header.index', compact('header', 'headerLogo', 'headerBackground'));
    }

    public function storeHeader(Request $request)
    {
        $headerLogo = Header::where('section', 'logo')->first();
        $logoImage = null;
        if ($request->hasFile('logo')) {
            $logoImage = $request->file('logo')->store('header', 'public');
            $headerLogo->update([
                'section' => 'logo',
                'content' => $logoImage
            ]);
        }
        $headerBackground = Header::where('section', 'background')->first();
        $backgroundImage = null;
        if ($request->hasFile('background')) {
            $backgroundImage = $request->file('background')->store('header', 'public');
            $headerBackground->update([
                'section' => 'background',
                'content' => $backgroundImage
            ]);
        }

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

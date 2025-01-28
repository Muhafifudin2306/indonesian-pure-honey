<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexVision()
    {
        $vision = Vision::where('section', 'vision')->first()->content ?? null;
        return view('admin.vision.index', compact('vision'));
    }

    public function storeVision(Request $request)
    {
        $vision = Vision::where('section', 'vision')->first();
        $vision->update([
            'content' => $request->input('vision')
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

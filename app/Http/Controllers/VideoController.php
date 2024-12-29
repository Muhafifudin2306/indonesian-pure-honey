<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexVideo()
    {
        $videoCover = Video::where('section', 'cover')->first()->content ?? null;
        $videoLink = Video::where('section', 'link')->first()->content ?? null;
        return view('admin.video.index', compact('videoCover','videoLink'));
    }

    public function storeVideo(Request $request)
    {
        $videoCover = Video::where('section', 'cover')->first();
        if ($request->hasFile('cover')) {
            $filePath = $request->file('cover')->store('video-covers', 'public');

            if ($videoCover) {
                $videoCover->update([
                    'content' => $filePath
                ]);
            } else {
                Video::create([
                    'section' => 'cover',
                    'content' => $filePath
                ]);
            }
        }

        $videoLink = Video::where('section', 'link')->first();
        if ($request->hasFile('link')) {
            $videoPath = $request->file('link')->store('videos', 'public');

            if ($videoLink) {
                $videoLink->update([
                    'content' => $videoPath
                ]);
            } else {
                Video::create([
                    'section' => 'link',
                    'content' => $videoPath
                ]);
            }
        }

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

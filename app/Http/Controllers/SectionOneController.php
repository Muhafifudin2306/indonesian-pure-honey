<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use Illuminate\Http\Request;

class SectionOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexOne()
    {
        $one = SectionOne::latest()->get();
        return view('admin.section_one.index', compact('one'));
    }

    public function storeOne(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('hero-section', 'public');
        }
        SectionOne::create([
            'image' => $filePath,
            'title' => $request->title,
            'description' => $request->source
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function updateEbook(Request $request, $id)
    {
        $ebook = SectionOne::find($id);
        $ebook->update([
            'source' => $request->source
        ]);
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('cover-ebook', 'public');
            $ebook->update([
                'cover' => $coverPath,
            ]);
        };
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('file-ebook', 'public');
            $ebook->update([
                'file' => $filePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $ebook = SectionOne::find($id);

        $ebook->delete();

        return response()->json(['success' => 'Delete Ebook Successfully']);
    }
}

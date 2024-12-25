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

    public function update(Request $request, $id)
    {
        $one = SectionOne::find($id);
        $one->update([
            'title' => $request->title,
            'description' => $request->source
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero-section', 'public');
            $one->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $one = SectionOne::find($id);

        $one->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

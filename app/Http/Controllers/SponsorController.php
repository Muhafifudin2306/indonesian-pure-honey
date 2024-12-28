<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexSponsor()
    {
        $sponsor = Sponsor::latest()->get();
        return view('admin.sponsor.index', compact('sponsor'));
    }

    public function storeSponsor(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('hero-section', 'public');
        }
        Sponsor::create([
            'image' => $filePath
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $sponsor = Sponsor::find($id);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero-section', 'public');
            $sponsor->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);

        $sponsor->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

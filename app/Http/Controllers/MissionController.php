<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexMission()
    {
        $mission = Mission::latest()->get();
        return view('admin.mission.index', compact('mission'));
    }

    public function storeMission(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('mission', 'public');
        }
        Mission::create([
            'image' => $filePath,
            'title' => $request->title,
            'description' => $request->source
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $mission = Mission::find($id);
        $mission->update([
            'title' => $request->title,
            'description' => $request->source
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('mission', 'public');
            $mission->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $mission = Mission::find($id);

        $mission->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

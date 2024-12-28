<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexTeam()
    {
        $team = Team::latest()->get();
        return view('admin.team.index', compact('team'));
    }

    public function storeTeam(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('team', 'public');
        }
        Team::create([
            'image' => $filePath,
            'name' => $request->name,
            'position' => $request->position,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->update([
            'name' => $request->name,
            'position' => $request->position,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'email' => $request->email,
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
            $team->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $team = Team::find($id);

        $team->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

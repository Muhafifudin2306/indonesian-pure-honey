<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexRegion()
    {
        $region = Region::orderBy("name")->get();
        return view('admin.region.index', compact('region'));
    }

    public function storeRegion(Request $request)
    {
        Region::create([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => $request->status
        ]);
        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function updateRegion(Request $request, $id)
    {
        $region = Region::find($id);
        $region->update([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => $request->status
        ]);
        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroyRegion($id)
    {
        $region = Region::find($id);
        $region->delete();
        return response()->json(['message' => 'Delete Data Berhasil!'], 201);
    }
    
}

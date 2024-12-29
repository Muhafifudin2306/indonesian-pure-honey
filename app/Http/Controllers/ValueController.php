<?php

namespace App\Http\Controllers;

use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexValue()
    {
        $value = Value::latest()->get();
        return view('admin.value.index', compact('value'));
    }

    public function storeValue(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('value', 'public');
        }
        Value::create([
            'image' => $filePath,
            'title' => $request->title,
            'description' => $request->source
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $value = Value::find($id);
        $value->update([
            'title' => $request->title,
            'description' => $request->source
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('value', 'public');
            $value->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $value = Value::find($id);

        $value->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

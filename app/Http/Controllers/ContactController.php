<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexContact()
    {
        $contact = Contact::latest()->get();
        return view('admin.contact.index', compact('contact'));
    }

    public function storeContact(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('contact', 'public');
        }
        Contact::create([
            'image' => $filePath,
            'name' => $request->name,
            'title' => $request->title,
            'contact' => $request->contact,
            'contact_link' => 'https://wa.me' . '/' . $request->contact
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update([
            'name' => $request->name,
            'title' => $request->title,
            'contact' => $request->contact,
            'contact_link' => 'https://wa.me' . '/' . $request->contact
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('contact', 'public');
            $contact->update([
                'image' => $imagePath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }
}

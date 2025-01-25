<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexFooter()
    {
        $company = Footer::where('section', 'company')->first()->content ?? null;
        $instagram = Footer::where('section', 'instagram')->first()->content ?? null;
        $linkedIn = Footer::where('section', 'linked_in')->first()->content ?? null;
        return view('admin.footer.index', compact('company', 'instagram', 'linkedIn'));
    }

    public function storeFooter(Request $request)
    {
        $company = Footer::where('section', 'company')->first();
        $company->update([
            'content' => $request->input('company')
        ]);
        $instagram = Footer::where('section', 'instagram')->first();
        $instagram->update([
            'content' => $request->input('instagram')
        ]);
        $linkedIn = Footer::where('section', 'linked_in')->first();
        $linkedIn->update([
            'content' => $request->input('linked_in')
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

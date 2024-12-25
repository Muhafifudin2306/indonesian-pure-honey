<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexSeo()
    {
        $seo = Seo::latest()->get();
        $seoTitle = Seo::where('section', 'title')->first()->content ?? null;
        $seoDescription = Seo::where('section', 'description')->first()->content ?? null;
        $seoKeyword = Seo::where('section', 'keyword')->first()->content ?? null;
        return view('admin.seo.index', compact('seo', 'seoTitle', 'seoDescription', 'seoKeyword'));
    }

    public function storeSeo(Request $request)
    {
        $seoTitle = Seo::where('section', 'title')->first();
        $seoTitle->update([
            'content' => $request->input('title')
        ]);
        $seoDescription = Seo::where('section', 'description')->first();
        $seoDescription->update([
            'content' => $request->input('description')
        ]);
        $seoKeyword = Seo::where('section', 'keyword')->first();
        $seoKeyword->update([
            'content' => $request->input('keyword')
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }
}

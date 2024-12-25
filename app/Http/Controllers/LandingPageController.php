<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use App\Models\Seo;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $one = SectionOne::latest()->get();
        $seo = Seo::latest()->get();
        $seoTitle = Seo::where('section', 'title')->first()->content ?? null;
        $seoDescription = Seo::where('section', 'description')->first()->content ?? null;
        $seoKeyword = Seo::where('section', 'keyword')->first()->content ?? null;
        return view('user.home', compact('one','seoTitle', 'seoDescription', 'seoKeyword'));
    }
}

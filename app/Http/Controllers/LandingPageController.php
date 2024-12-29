<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Header;
use App\Models\Product;
use App\Models\SectionOne;
use App\Models\Seo;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\Value;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $seoTitle = Seo::where('section', 'title')->first()->content ?? null;
        $seoDescription = Seo::where('section', 'description')->first()->content ?? null;
        $seoKeyword = Seo::where('section', 'keyword')->first()->content ?? null;
        
        $headerLogo = Header::where('section', 'logo')->first()->content ?? null;
        $headerBackground = Header::where('section', 'background')->first()->content ?? null;
        
        $one = SectionOne::latest()->get();

        $contact = Contact::latest()->get();

        $value = Value::latest()->get();

        $aboutTitle = About::where('section', 'title')->first()->content ?? null;
        $aboutDescription = About::where('section', 'description')->first()->content ?? null;
        $aboutImage = About::where('section', 'image')->first()->content ?? null;

        $team = Team::latest()->get();

        $sponsor = Sponsor::latest()->get();

        $product = Product::with('images')->latest()->get();

        $videoCover = Video::where('section', 'cover')->first()->content ?? null;
        $videoLink = Video::where('section', 'link')->first()->content ?? null;
        
        return view('user.home', compact(
            'seoTitle', 'seoDescription', 'seoKeyword', 
            'headerLogo', 'headerBackground',
            'one',
            'contact',
            'value',
            'sponsor',
            'aboutTitle', 'aboutDescription', 'aboutImage',
            'team',
            'product',
            'videoCover', 'videoLink'
        ));
    }
}

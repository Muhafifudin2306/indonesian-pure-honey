<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Header;
use App\Models\SectionOne;
use App\Models\Seo;
use App\Models\Sponsor;
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

        $aboutTitle = About::where('section', 'title')->first()->content ?? null;
        $aboutDescription = About::where('section', 'description')->first()->content ?? null;
        $aboutImage = About::where('section', 'image')->first()->content ?? null;

        $sponsor = Sponsor::latest()->get();
        
        return view('user.home', compact(
            'seoTitle', 'seoDescription', 'seoKeyword', 
            'headerLogo', 'headerBackground',
            'one',
            'contact',
            'sponsor',
            'aboutTitle', 'aboutDescription', 'aboutImage'
        ));
    }
}

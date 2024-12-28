<?php

namespace App\Http\Controllers;

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



        $sponsor = Sponsor::latest()->get();
        
        return view('user.home', compact(
            'seoTitle', 'seoDescription', 'seoKeyword', 
            'headerLogo', 'headerBackground',
            'one',
            'contact',
            'sponsor'
        ));
    }
}

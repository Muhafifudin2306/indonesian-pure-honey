<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $one = SectionOne::latest()->get();
        return view('user.home', compact('one'));
    }
}

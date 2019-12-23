<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Mission;

class PublicPagesController extends Controller
{
    public function home () {
        $mission = Mission::first();
        return view('layouts.public.pages.home', compact('mission'));
    }
    public function aboutUs () {
        $about = About::first();
        return view('layouts.public.pages.aboutUs', compact('about'));
    }
    public function portfolio () {
        return view('layouts.public.pages.portfolio');
    }
    public function contacts () {
        return view('layouts.public.pages.contacts');
    }
}
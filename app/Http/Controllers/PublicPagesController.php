<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function home () {
        return view('layouts.public.pages.home');
    }
    public function about () {
        return view('layouts.public.pages.about');
    }
    public function portfolio () {
        return view('layouts.public.pages.portfolio');
    }
    public function contacts () {
        return view('layouts.public.pages.contacts');
    }
}
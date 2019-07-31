<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function home () {
        return view('layouts.public.pages.home');
    }
    public function aboutUs () {
        return view('layouts.public.pages.aboutUs');
    }
    public function portfolio () {
        return view('layouts.public.pages.portfolio');
    }
    public function contacts () {
        return view('layouts.public.pages.contacts');
    }
}
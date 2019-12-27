<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Mission;
use App\Service;
use App\Comment;
use App\About;
use App\Category;
use App\Project;
use App\Image;

class PublicPagesController extends Controller
{
    public function home () {
        $slides = Slider::get();
        $mission = Mission::first();
        $services = Service::get();
        $comments = Comment::get();
        return view('layouts.public.pages.home', compact('slides', 'mission', 'services', 'comments'));
    }
    public function aboutUs () {
        $about = About::first();
        return view('layouts.public.pages.aboutUs', compact('about'));
    }
    public function portfolio () {
        $categories = Category::get();
        $projects = Project::get();
        $images = Image::get();
        return view('layouts.public.pages.portfolio', compact('categories', 'projects', 'images'));
    }
    public function contacts () {
        return view('layouts.public.pages.contacts');
    }
}
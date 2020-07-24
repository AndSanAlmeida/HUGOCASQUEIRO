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
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicPagesController extends Controller
{
    public function home()
    {
        $slides = Slider::get();
        $mission = Mission::first();
        $services = Service::get();
        $comments = Comment::get();
        return view('layouts.public.pages.home', compact('slides', 'mission', 'services', 'comments'));
    }
    public function aboutUs()
    {
        $about = About::first();
        return view('layouts.public.pages.aboutUs', compact('about'));
    }
    public function portfolio()
    {
        $categories = Category::get();
        $projects = Project::get();
        $images = Image::get();
        return view('layouts.public.pages.portfolio', compact('categories', 'projects', 'images'));
    }
    public function contacts()
    {
        return view('layouts.public.pages.contacts');
    }
    public function sendEmail()
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $captcha_data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => request()->get('recaptcha'),
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($captcha_data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        // Google Response
        // dd($resultJson);

        if ($resultJson->success != true) {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        if ($resultJson->score >= 0.5) {

            $data = request()->validate([
                'name' => 'required|max:50',
                'email' => 'required|email',
                'message' => 'required|max:255',
                'recaptcha' => 'required'
            ]);

            // Send Email
            Mail::to('carpintariahc@gmail.com')->send(new ContactMail($data));

            return redirect()->route('contacts', app()->getLocale())->with('message', 'Formulário submetido com sucesso! Obrigado');
        } else {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
    }
}

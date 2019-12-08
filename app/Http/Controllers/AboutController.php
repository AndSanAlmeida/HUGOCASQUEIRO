<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function index() 
    {
        $info = About::first();
        return view('dashboard.about')->with('info', $info);
    }

    public function save (Request $request)
    {
        $about = About::first();
        $about
            ->setTranslation('title', 'pt', json_encode($request['title_pt']))
            ->setTranslation('body', 'pt', json_encode($request['body_pt']))

            ->setTranslation('title', 'en', json_encode($request['title_en']))
            ->setTranslation('body', 'en', json_encode($request['body_en']))

            ->setTranslation('title', 'fr', json_encode($request['title_fr']))
            ->setTranslation('body', 'fr', json_encode($request['body_fr']))
            ->update();
            
            Alert::success(trans('messages.success'), trans('messages.success-message'));

            return back();
    }
}

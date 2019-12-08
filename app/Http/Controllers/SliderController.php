<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class SliderController extends Controller
{
    public function index()
    {
        $info = Slider::all();
        return view('dashboard.slider')->with('info', $info);
    }

    public function edit($locale, $id)
    {
        $info = Slider::find($id);
        return view('dashboard.slider-edit')->with('info', $info);
    }

    public function save(Request $request)
    {
        try {
            $slider = Slider::first();
            $img = Image::make($_FILES['photo']['tmp_name']);
            // save image
            $img->save('img/slider.jpg');
            $slider->path =  "img/slider.jpg";
            $slider
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))

                ->setTranslation('title', 'en', json_encode($request['title_en']))

                ->setTranslation('title', 'fr', json_encode($request['title_fr']))
                ->update();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

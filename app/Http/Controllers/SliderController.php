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

    public function new()
    {
        return view('dashboard.slider-new');
    }

    public function delete($locale, $id)
    {
        try {
            $slider = Slider::find($id);

            $slider->delete();
            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
             Alert::toast($e->getMessage(), 'error');
             return back();
         }
        
    }

    public function save(Request $request, $locale)
    {
        try {
            $slider = new Slider();
            $slider->path = "";
            $slider
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))

                ->setTranslation('title', 'en', json_encode($request['title_en']))

                ->setTranslation('title', 'fr', json_encode($request['title_fr']))

                ->save();

            if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/slider-" . $slider->id . ".jpg");
                $slider->path = "img/slider-" . $slider->id . ".jpg";
                $slider->update();
            }

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.sliders', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    public function editSlide(Request $request, $locale, $id)
    {
        try {
            $slider = Slider::find($id);
                if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/slider-".$slider->id.".jpg");
                $slider->path = "img/slider-".$slider->id.".jpg";
                }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;

class SliderController extends Controller
{
    /**
     * return sliders Index view
     *
     * @return view
     */
    public function index()
    {
        $info = Slider::all();
        return view('dashboard.sliders.index')->with('info', $info);
    }

    /**
     * return single slider view
     *
     * @param [type] $locale
     * @param [type] $id
     * @return view
     */
    public function show($locale, $id)
    {
        $info = Slider::find($id);
        return view('dashboard.sliders.show')->with('info', $info);
    }

    /**
     * return new slider view
     *
     * @return view
     */
    public function new()
    {
        return view('dashboard.sliders.new');
    }

    /**
     * Deletes slider by ID
     *
     * @param [type] $locale
     * @param [type] $id
     * @return void
     */
    public function delete($locale, $id)
    {
        try {
            $sliders = Slider::count();
            if ($sliders <= 1) {
                Alert::toast(trans('messages.has_to_have_one'), 'error');
                return back();
            }
            $slider = Slider::find($id);
            if (File::exists(public_path($slider->path))) {
                File::delete(public_path($slider->path));
            }
            $slider->delete();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    /**
     * Save Slider to DB
     *
     * @param Request $request
     * @param [type] $locale
     * @return void
     */
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
                if (!file_exists(public_path('img/slider'))) {
                    mkdir(public_path('img/slider'), 0755, true);
                }
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/slider/slide-" . $slider->id . ".jpg");
                $slider->path = "img/slider/slide-" . $slider->id . ".jpg";
                $slider->update();
            }

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.sliders', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    /**
     * Edit existing slider by ID
     *
     * @param Request $request
     * @param [type] $locale
     * @param [type] $id
     * @return void
     */
    public function edit(Request $request, $locale, $id)
    {
        try {
            $slider = Slider::find($id);
            if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
                if (!file_exists(public_path('img/slider'))) {
                    mkdir(public_path('img/slider'), 0755, true);
                }
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/slider/slide-" . $slider->id . ".jpg");
                $slider->path = "img/slider/slide-" . $slider->id . ".jpg";
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

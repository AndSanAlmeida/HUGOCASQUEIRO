<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use RealRashid\SweetAlert\Facades\Alert;
class ServiceController extends Controller
{
    public function index()
    {
        $info = Service::orderBy('identifier', 'ASC')->get();
        return view('dashboard.services.index')->with('info', $info);
    }

    public function edit($locale, $id)
    {
        $info = Service::find($id);
        return view('dashboard.services.edit')->with('info', $info);
    }

    public function new()
    {
        return view('dashboard.services.new');
    }

    public function delete($locale, $id)
    {
        try {
            $Service = Service::find($id);
            $services = Service::count();
            if ($services) {
                Alert::toast(trans('messages.has_to_have_one'), 'error');
                return back();
            }
            $Service->delete();
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
            $service = new Service();
            $service->identifier = $request['identifier_pt'];
            $service
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))
                ->setTranslation('body', 'pt', json_encode(urlencode($request['editor_pt'])))

                ->setTranslation('title', 'en', json_encode($request['title_en']))
                ->setTranslation('body', 'en', json_encode(urlencode($request['editor_en'])))
                ->setTranslation('title', 'fr', json_encode($request['title_fr']))
                ->setTranslation('body', 'fr', json_encode(urlencode($request['editor_fr'])))

                ->save();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.services', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    public function editService(Request $request, $locale, $id)
    {
        try {
            $service = Service::find($id);
            $service->identifier = $request['identifier_pt'];
            $service
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))
                ->setTranslation('body', 'pt', json_encode(urlencode($request['editor_pt'])))

                ->setTranslation('title', 'en', json_encode($request['title_en']))
                ->setTranslation('body', 'en', json_encode(urlencode($request['editor_en'])))
                ->setTranslation('title', 'fr', json_encode($request['title_fr']))
                ->setTranslation('body', 'fr', json_encode(urlencode($request['editor_fr'])))

                ->update();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

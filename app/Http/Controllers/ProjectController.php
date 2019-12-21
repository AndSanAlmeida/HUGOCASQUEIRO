<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Project::all();
        return view('dashboard.projects.index')->with('info', $info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
        $info = Project::find($id);
        return view('dashboard.projects.show')->with('info', $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $locale, $id)
    {
        try {
            $project = Project::find($id);
            if (isset($_FILES['main_photo']) && $_FILES['main_photo']['size'] > 0) {
                if (!file_exists(public_path('img/project/' . $project->id))) {
                    mkdir(public_path('img/project' . $project->id), 775, true);
                }
                $img = Image::make($_FILES['main_photo']['tmp_name']);
                // save image
                $img->save("img/project/main_photo-" . $project->id . ".jpg");
                $project->path = "img/project/main_photo-" . $project->id . ".jpg";
            }
            $project
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
        try {
            $projects = Project::count();
            if ($projects <= 1) {
                Alert::toast(trans('messages.has_to_have_one'), 'error');
                return back();
            }
            $project = Project::find($id);
            if (File::exists(public_path($project->main_img_path))) {
                File::delete(public_path($project->main_img_path));
            }
            $project->delete();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

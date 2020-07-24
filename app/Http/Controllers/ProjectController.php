<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
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
        $categories = Category::get()->where('id', '>', 1);
        return view('dashboard.projects.new')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $project = new Project();
            $project->category_id = $request['category'];
            $project->main_photo = "";
            $project
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))
                ->setTranslation('family', 'pt', json_encode($request['family_pt']))

                ->setTranslation('title', 'en', json_encode($request['title_en']))
                ->setTranslation('family', 'en', json_encode($request['family_en']))

                ->setTranslation('title', 'fr', json_encode($request['title_fr']))
                ->setTranslation('family', 'fr', json_encode($request['family_fr']))
                ->save();

            if (isset($_FILES['main_photo']) && $_FILES['main_photo']['size'] > 0) {
                if (!file_exists(public_path('img/projects/' . $project->id))) {
                    mkdir(public_path('img/projects/' . $project->id), 0755, true);
                }
                $img = Image::make($_FILES['main_photo']['tmp_name']);
                // save image
                $img->save("img/projects/" . $project->id . "/main_photo.jpg");
                $project->main_photo = "img/projects/" . $project->id . "/main_photo.jpg";
                $project->update();
            }

            if (isset($_FILES['photos']) && $_FILES['photos']['size'] > 0) {
                if (!file_exists(public_path('img/projects/' . $project->id . '/photos'))) {
                    mkdir(public_path('img/projects/' . $project->id . '/photos'), 0755, true);
                }
                $images = $request->file('photos');
                foreach ($images as $image) {
                    $filename = $image->getClientOriginalName();
                    Image::make($image)->save(public_path('img/projects/' . $project->id . '/photos' . '/' . $filename));
                    $img = new \App\Image();
                    $img->path = 'img/projects/' . $project->id . '/photos' . '/' . $filename;
                    $img->project_id = $project->id;
                    $img->save();
                }
            }



            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.projects', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
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
        $categories = Category::get()->where('id', '>', 1);
        return view('dashboard.projects.show')->with(['info' => $info, 'categories' => $categories]);
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
            $project->category_id = $request['category'];
            $project
                ->setTranslation('title', 'pt', json_encode($request['title_pt']))
                ->setTranslation('family', 'pt', json_encode($request['family_pt']))

                ->setTranslation('title', 'en', json_encode($request['title_en']))
                ->setTranslation('family', 'en', json_encode($request['family_en']))

                ->setTranslation('title', 'fr', json_encode($request['title_fr']))
                ->setTranslation('family', 'fr', json_encode($request['family_fr']))
                ->update();

            if ($request->hasFile('main_photo') && isset($_FILES['main_photo']) && $_FILES['main_photo']['size'] > 0) {
                if (!file_exists(public_path('img/projects/' . $project->id))) {
                    mkdir(public_path('img/projects/' . $project->id), 0755, true);
                }
                $img = Image::make($_FILES['main_photo']['tmp_name']);
                // save image
                $img->save("img/projects/" . $project->id . "/main_photo.jpg");
                $project->main_photo = "img/projects/" . $project->id . "/main_photo.jpg";
                $project->update();
            }

            if ($request->hasFile('photos') && isset($_FILES['photos']) && $_FILES['photos']['size'] > 0) {
                $project->images()->delete();
                File::deleteDirectory(public_path('img/projects/' . $project->id . '/photos'));
                if (!file_exists(public_path('img/projects/' . $project->id . '/photos'))) {
                    mkdir(public_path('img/projects/' . $project->id . '/photos'), 0755, true);
                }
                $images = $request->file('photos');
                foreach ($images as $image) {
                    $filename = $image->getClientOriginalName();
                    Image::make($image)->save(public_path('img/projects/' . $project->id . '/photos' . '/' . $filename));
                    $img = \App\Image::where('path', '=', 'img/projects/' . $project->id . '/photos' . '/' . $filename)->count();

                    $img = new \App\Image();
                    $img->path = 'img/projects/' . $project->id . '/photos' . '/' . $filename;
                    $img->project_id = $project->id;
                    $img->save();
                }
            }



            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
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
            $project->images()->delete();
            File::deleteDirectory(public_path("img/projects/" . $project->id));
            $project->delete();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

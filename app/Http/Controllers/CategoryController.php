<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Foundation\Console\Presets\React;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    /**
     * return categories Index view
     *
     * @return view
     */
    public function index()
    {
        $info = Category::all();
        return view('dashboard.categories.index')->with('info', $info);
    }

    /**
     * return single Category view
     *
     * @param [type] $locale
     * @param [type] $id
     * @return view
     */
    public function show($locale, $id)
    {
        $info = Category::find($id);
        return view('dashboard.categories.show')->with('info', $info);
    }

    /**
     * return new Category view
     *
     * @return view
     */
    public function new()
    {
        return view('dashboard.categories.new');
    }

    /**
     * Deletes Category by ID
     *
     * @param [type] $locale
     * @param [type] $id
     * @return void
     */
    public function delete($locale, $id)
    {
        try {
            $categories = Category::count();
            if ($categories <= 1 || $id == 1) {
                Alert::toast(trans('messages.has_to_have_one'), 'error');
                return back();
            }
            $Category = Category::find($id);
            $Category->delete();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    /**
     * Save Category to DB
     *
     * @param Request $request
     * @param [type] $locale
     * @return void
     */
    public function save(Request $request, $locale)
    {
        try {
            $Category = new Category();
            $Category->filter = '.' . $request['filter'];
            $Category
                ->setTranslation('name', 'pt', json_encode($request['name_pt']))

                ->setTranslation('name', 'en', json_encode($request['name_en']))

                ->setTranslation('name', 'fr', json_encode($request['name_fr']))

                ->save();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.categories', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    /**
     * Edit existing Category by ID
     *
     * @param Request $request
     * @param [type] $locale
     * @param [type] $id
     * @return void
     */
    public function edit(Request $request, $locale, $id)
    {
        try {
            $Category = Category::find($id);
            $Category->filter = '.' . $request['filter'];
            $Category
                ->setTranslation('name', 'pt', json_encode($request['name_pt']))

                ->setTranslation('name', 'en', json_encode($request['name_en']))

                ->setTranslation('name', 'fr', json_encode($request['name_fr']))

                ->update();

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

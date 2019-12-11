<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;
class CommentController extends Controller
{
    public function index()
    {
        $info = Comment::all();
        return view('dashboard.comment')->with('info', $info);
    }

    public function edit($locale, $id)
    {
        $info = Comment::find($id);
        return view('dashboard.comment-edit')->with('info', $info);
    }

    public function new()
    {
        return view('dashboard.comment-new');
    }

    public function delete($locale, $id)
    {
        try {
            $Comment = Comment::find($id);
            if (File::exists(public_path($Comment->photo))) {
                File::delete(public_path($Comment->photo));
            }
            $Comment->delete();
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
            $Comment = new Comment();
            $Comment->name = $request['name'];
            $Comment->photo = "";
            $Comment
                ->setTranslation('body', 'pt', json_encode($request['body_pt']))
                ->setTranslation('body', 'en', json_encode($request['body_en']))
                ->setTranslation('body', 'fr', json_encode($request['body_fr']))

                ->save();

            if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
                if (!file_exists(public_path('img/comments'))) {
                    mkdir(public_path('img/comments'), 775, true);
                }
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/comments/user-" . $Comment->id . ".jpg");
                $Comment->photo = "img/comments/user-" . $Comment->id . ".jpg";
                $Comment->update();
            }

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return redirect()->route('dashboard.comments', app()->getLocale());
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }

    public function editComment(Request $request, $locale, $id)
    {
        try {
            $Comment = Comment::find($id);
            $Comment->name = $request['name'];
            $Comment
                ->setTranslation('body', 'pt', json_encode($request['body_pt']))
                ->setTranslation('body', 'en', json_encode($request['body_en']))
                ->setTranslation('body', 'fr', json_encode($request['body_fr']))

                ->update();

            if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 0) {
                if (!file_exists(public_path('img/comments'))) {
                    mkdir(public_path('img/comments'), 775, true);
                }
                $img = Image::make($_FILES['photo']['tmp_name']);
                // save image
                $img->save("img/comments/user-" . $Comment->id . ".jpg");
                $Comment->photo = "img/comments/user-" . $Comment->id . ".jpg";
                $Comment->update();
            }

            Alert::success(trans('messages.success'), trans('messages.success-message'));
            return back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return back();
        }
    }
}

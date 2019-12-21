@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(trans('messages.new-project')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.projects', app()->getLocale())}}" class="btn btn-outline-dark mb-3">{{ucfirst(trans('messages.back'))}}</a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pt" role="tab"
                    aria-controls="pt">{{ucfirst(trans('messages.portuguese'))}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#en" role="tab"
                    aria-controls="en">{{ucfirst(trans('messages.english'))}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#fr" role="tab"
                    aria-controls="fr">{{ucfirst(trans('messages.french'))}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#img" role="tab" aria-controls="img">{{ucfirst(trans('messages.image'))}}</a>
            </li>
        </ul>
    <form action="{{route('dashboard.save-project', app()->getLocale())}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="category">{{ucfirst(trans('messages.category'))}}</label>
                    <select class="form-control" id="category" name="category">
                        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{json_decode($category->name)}}</option>   
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="family_pt">{{ucfirst(trans('messages.family'))}}</label>
                    <input type="text" class="form-control" name="family_pt" id="family_pt" value="" required>
                </div>
                <div class="form-group">
                    <label for="title_pt">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="" required>
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="family_en">{{ucfirst(trans('messages.family'))}}</label>
                    <input type="text" class="form-control" name="family_en" id="family_en" value="" required>
                </div>
                <div class="form-group">
                    <label for="title_en">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="" required>
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="family_fr">{{ucfirst(trans('messages.family'))}}</label>
                    <input type="text" class="form-control" name="family_fr" id="family_fr" value="" required>
                </div>
                <div class="form-group">
                    <label for="title_fr">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="" required>
                </div>
            </div>
            <div class="tab-pane" id="img" role="tabpanel">
                <div class="form-group">
                    <label for="main_photo">{{ ucfirst(trans('messages.main_photo'))}}</label>
                    <input class="form-control-file" type="file"  name="main_photo" id="main_photo" required>
                </div>
                <div class="form-group">
                    <label for="photos">{{ ucfirst(trans('messages.photos'))}}</label>
                    <input class="form-control-file" type="file" name="photos[]" id="photos" multiple>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">{{ucfirst(trans('messages.save'))}}</button>
        </form>

    </div>
</main>
@endsection
@section('scripts')
    
@endsection
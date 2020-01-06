@extends('layouts.dashboard.dashboard')
@section('title', __(json_decode($info->title)) )
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
    <form action="{{route('dashboard.update-project', ['locale' => app()->getLocale(),'id' => $info->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="category">{{ucfirst(trans('messages.category'))}}</label>
                    <select class="form-control" id="category" name="category">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == $info->category->id ? 'selected' : '' }}>{{json_decode($category->name)}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                                    <label for="family_pt">{{ucfirst(trans('messages.family'))}}</label>
                                    <input type="text" class="form-control" name="family_pt" id="family_pt" value="{{json_decode($info->getTranslation('family', 'pt'))}}" >
                                </div>
                <div class="form-group">
                    <label for="title_pt">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="{{json_decode($info->getTranslation('title', 'pt'))}}">
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <div class="form-group">
                                        <label for="family_en">{{ucfirst(trans('messages.family'))}}</label>
                                        <input type="text" class="form-control" name="family_en" id="family_en" value="{{json_decode($info->getTranslation('family', 'en'))}}" >
                                    </div>
                    <label for="title_en">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="{{json_decode($info->getTranslation('title', 'en'))}}">
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <div class="form-group">
                                        <label for="family_fr">{{ucfirst(trans('messages.family'))}}</label>
                                        <input type="text" class="form-control" name="family_fr" id="family_fr" value="{{json_decode($info->getTranslation('family', 'fr'))}}">
                                    </div>
                    <label for="title_fr">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="{{json_decode($info->getTranslation('title', 'fr'))}}">
                </div>
            </div>
            <div class="tab-pane" id="img" role="tabpanel">
                <div class="form-group">
                    <label for="main_photo" class="h3">{{ ucfirst(trans('messages.main_photo'))}}</label>
                    <input class="form-control-file mb-3" type="file" name="main_photo" id="main_photo">
                    @if ($info->main_photo)
                <img src="{{asset($info->main_photo)}}" class="w-50" alt="main_photo">
                    @endif
                </div>
                <div class="form-group">
                    <label for="photos" class="h3">{{ ucfirst(trans('messages.photos'))}}</label>
                    <input class="form-control-file mb-3" type="file" name="photos[]" id="photos" multiple>
                    @if ($info->images)
                        @foreach ($info->images as $img)
                        <img src="{{asset($img->path)}}" class="img-thumbnail" alt="photo" width="350" height="350">
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">{{ucfirst(trans('messages.save'))}}</button>
        </form>

    </div>
</main>
@endsection
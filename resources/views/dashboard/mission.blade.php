@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(trans('messages.our-mission')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
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
        </ul>
    <form action="{{route('dashboard.save-mission', app()->getlocale())}}" method="POST">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="title_pt">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="{{json_decode($info->getTranslation('title', 'pt'))}}">
                </div>
                <div class="form-group">
                    <label for="body_pt">{{ucfirst(trans('messages.description'))}}</label>
                    <textarea class="form-control" name="body_pt" id="body_pt" rows="10">{{json_decode($info->getTranslation('body', 'pt'))}}</textarea>
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="title_en">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="{{json_decode($info->getTranslation('title', 'en'))}}">
                </div>
                <div class="form-group">
                <label for="body_en">{{ucfirst(trans('messages.description'))}}</label>
                    <textarea class="form-control" name="body_en" id="body_en" rows="10">{{json_decode($info->getTranslation('body', 'en'))}}</textarea>
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="title_fr">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="{{json_decode($info->getTranslation('title', 'fr'))}}">
                </div>
                <div class="form-group">
                    <label for="body_fr">{{ucfirst(trans('messages.description'))}}</label>
                    <textarea class="form-control" name="body_fr" id="body_fr" rows="10">{{json_decode($info->getTranslation('body', 'fr'))}}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">{{ucfirst(trans('messages.save'))}}</button>
        </form>

    </div>
</main>
@endsection
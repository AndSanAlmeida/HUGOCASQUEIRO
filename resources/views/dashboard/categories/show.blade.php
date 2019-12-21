@extends('layouts.dashboard.dashboard')
@section('title', __(json_decode($info->name)) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.categories', app()->getLocale())}}" class="btn btn-outline-dark mb-3">{{ucfirst(trans('messages.back'))}}</a>
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
                <a class="nav-link" data-toggle="tab" href="#filter" role="tab" aria-controls="img">{{ucfirst(trans('messages.filter'))}}</a>
            </li>
        </ul>
    <form action="{{route('dashboard.update-category', ['locale' => app()->getLocale(),'id' => $info->id])}}" method="POST">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="name_pt">{{ucfirst(trans('messages.name'))}}</label>
                    <input type="text" class="form-control" name="name_pt" id="name_pt"
                        value="{{json_decode($info->getTranslation('name', 'pt'))}}">
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="name_en">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"
                        value="{{json_decode($info->getTranslation('name', 'en'))}}">
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="name_fr">{{ucfirst(trans('messages.title'))}}</label>
                    <input type="text" class="form-control" name="name_fr" id="name_fr"
                        value="{{json_decode($info->getTranslation('name', 'fr'))}}">
                </div>
            </div>
            <div class="tab-pane" id="filter" role="tabpanel">
                <div class="form-group d-flex flex-column">
                    <label for="filter">{{ucfirst(trans('messages.filter'))}}</label>
                    <input type="text" class="form-control" name="filter" id="filter"
                        value="{{str_replace(".","",$info->filter)}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">{{ucfirst(trans('messages.save'))}}</button>
        </form>

    </div>
</main>
@endsection
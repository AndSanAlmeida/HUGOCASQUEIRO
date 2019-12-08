@extends('layouts.dashboard.dashboard')
@section('title', __(json_decode($info->title)) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pt" role="tab"
                    aria-controls="pt">@lang('messages.portuguese')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#en" role="tab"
                    aria-controls="en">@lang('messages.english')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#fr" role="tab"
                    aria-controls="fr">@lang('messages.french')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#img" role="tab" aria-controls="img">@lang('messages.image')</a>
            </li>
        </ul>
    <form action="{{route('dashboard.save-slider', app()->getlocale())}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="title_pt">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="{{json_decode($info->getTranslation('title', 'pt'))}}">
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="title_en">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="{{json_decode($info->getTranslation('title', 'en'))}}">
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="title_fr">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="{{json_decode($info->getTranslation('title', 'fr'))}}">
                </div>
            </div>
            <div class="tab-pane" id="img" role="tabpanel">
                <div class="form-group">
                    <input type="file"  name="photo" id="photo">
                    @if ($info->path)
                <img src="{{asset($info->path)}}" alt="{{$info->title}}" class="img-fluid mt-2">
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">@lang('messages.save')</button>
        </form>

    </div>
</main>
@endsection
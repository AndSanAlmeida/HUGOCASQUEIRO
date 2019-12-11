@extends('layouts.dashboard.dashboard')
@section('title', __($info->name    ) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.comments', app()->getLocale())}}" class="btn btn-outline-dark mb-3">@lang('messages.back')</a>
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
    <form action="{{route('dashboard.update.comment', ['locale' => app()->getLocale(),'id' => $info->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="name">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="{{$info->name}}">

                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="body_pt">@lang('messages.description')</label>
                        <textarea class="form-control" name="body_pt" id="body_pt" cols="30" rows="10">{{json_decode($info->getTranslation('body', 'pt'))}}</textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="body_en">@lang('messages.description')</label>
                <textarea class="form-control" name="body_en" id="body_en" cols="30" rows="10">{{json_decode($info->getTranslation('body', 'en'))}}</textarea>
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <div class="form-group">
                        <label for="body_fr">@lang('messages.description')</label>
                        <textarea class="form-control" name="body_fr" id="body_en" cols="30" rows="10">{{json_decode($info->getTranslation('body', 'fr'))}}</textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="img" role="tabpanel">
                <div class="form-group">
                    <input type="file"  name="photo" id="photo">
                    @if ($info->path)
                <img src="{{asset($info->path)}}" alt="{{$info->title}}" class="img-fluid mt-2 w-50">
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">@lang('messages.save')</button>
        </form>

    </div>
</main>
@endsection
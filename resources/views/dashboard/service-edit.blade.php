@extends('layouts.dashboard.dashboard')
@section('title', __(json_decode($info->title)) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.services', app()->getLocale())}}" class="btn btn-outline-dark mb-3">@lang('messages.back')</a>
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
        </ul>
    <form action="{{route('dashboard.update.service', ['locale' => app()->getLocale(),'id' => $info->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_pt">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_pt" id="identifier_pt"
                        value="{{$info->identifier}}">
                </div>
                <div class="form-group">
                    <label for="title_pt">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="{{json_decode($info->getTranslation('title', 'pt'))}}">
                </div>
                <div class="form-group">
                    <label for="editor_pt">@lang('messages.description')</label>
                    <div id="editor_pt"></div>
                    <textarea name="editor_pt" class="hidden"> </textarea>
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_en">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_en" id="identifier_en"
                        value="{{$info->identifier}}">
                </div>
                <div class="form-group">
                    <label for="title_en">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="{{json_decode($info->getTranslation('title', 'en'))}}">
                </div>
                <div class="form-group">
                    <label for="body_en">@lang('messages.description')</label>
                    <div id="editor_en"></div>
                    <textarea name="editor_en" class="hidden"> </textarea>
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_fr">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_fr" id="identifier_fr"
                        value="{{$info->identifier}}">
                </div>
                <div class="form-group">
                    <label for="title_fr">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="{{json_decode($info->getTranslation('title', 'fr'))}}">
                </div>
                <div class="form-group">
                    <label for="body_fr">@lang('messages.description')</label>
                    <div id="editor_fr"></div>
                    <textarea name="editor_fr" class="hidden"> </textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary d-flex ml-auto mt-3">@lang('messages.save')</button>
        </form>

    </div>
</main>
@endsection
@section('scripts')
<script>
var editor_pt = {!!urldecode($info->getTranslation('body', 'pt'))!!};
var editor_en = {!!urldecode($info->getTranslation('body', 'en'))!!};
var editor_fr = {!!urldecode($info->getTranslation('body', 'fr'))!!};
</script>
@endsection
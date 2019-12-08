@extends('layouts.dashboard.dashboard')
@section('title', __('messages.new-slider') )
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
    <form action="{{route('dashboard.save-service', app()->getLocale())}}" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="tab-content">
            <div class="tab-pane active" id="pt" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_pt">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_pt" id="identifier_pt"
                        value="">
                </div>
                <div class="form-group">
                    <label for="title_pt">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_pt" id="title_pt"
                        value="">
                </div>
                <div class="form-group">
                    <label for="editor_pt">@lang('messages.description')</label>
                    <div id="editor_pt"></div>
                    <textarea class="hidden" name="editor_pt" rows="10"></textarea>
                </div>
            </div>
            <div class="tab-pane" id="en" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_en">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_en" id="identifier_en"
                        value="">
                </div>
                <div class="form-group">
                    <label for="title_en">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_en" id="title_en"
                        value="">
                </div>
                <div class="form-group">
                    <label for="editor_en">@lang('messages.description')</label>
                    <div id="editor_en"></div>
                    <textarea class="hidden" name="editor_en" rows="10"></textarea>
                </div>
            </div>
            <div class="tab-pane" id="fr" role="tabpanel">
                <div class="form-group">
                    <label for="identifier_fr">@lang('messages.identifier')</label>
                    <input type="number" min="1" class="form-control" name="identifier_fr" id="identifier_fr"
                        value="">
                </div>
                <div class="form-group">
                    <label for="title_fr">@lang('messages.title')</label>
                    <input type="text" class="form-control" name="title_fr" id="title_fr"
                        value="">
                </div>
                <div class="form-group">
                    <label for="editor_fr">@lang('messages.description')</label>
                    <div id="editor_fr"></div>
                    <textarea class="hidden" name="editor_fr" rows="10"></textarea>
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
var editor_pt = "";
var editor_en = "";
var editor_fr = "";
</script>
@endsection
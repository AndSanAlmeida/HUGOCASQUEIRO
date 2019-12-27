@extends('layouts.public.publicMaster') 

@section('title', 'Portfólio')

@section('content')

<div id="portfolio">
    <div class="portfolio" style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <h1 class="main-title">{{ __('messages.portfolio.title')}}</h1>
                    <p class="main-subtitle">{{ __('messages.portfolio.slogan')}}</p>
                </div>
            </div>
        </div>
    </div>    

    <div id="isotope">
        <div class="container">
            <div class="isotope-sorters">
                <ul class="align-center">
                    @foreach ($categories as $category)
                        <li data-filter="{{ $category->filter }}">{{ json_decode($category->name) }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="isotope-list">
                @foreach ($projects as $project)
                    <div class="isotope-item {{ ltrim($project->category->filter, '.') }}">
                        <a href="{{ $project->main_photo }}" class="galleryItem" data-group="{{ $project->id}}" data-title="{{ json_decode($project->title) }}">
                            <img class="img_responsive" src="{{ $project->main_photo }}">           
                            <div class="isotope-overlay"></div>
                            <h5 class="align-center">{{ json_decode($project->title) }}</h5>
                            <p class="align-center">{{ json_decode($project->family) }}</p>                       
                        </a>                     
                    </div> 
                @endforeach               
            </div>
        </div>  
    </div>

    <!-- HIDE GALLERIES -->
    <div class="hide">
        @foreach ($images as $image)
            <a href="{{ $image->path}}" class="galleryItem hide" data-group="{{ $image->project_id}}" data-title="{{ json_decode($image->project->title) }}"></a>
        @endforeach
    </div>

</div>

<div id="budget">
    <div class="parallax-budget" style="background-image: url('{!! asset('img/budget.jpg') !!}');">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <div class="grid budget_info align-center">
                        <div class="grid__item grid__item--lg-span-8">
                            <h1>{{ __('messages.budget')}}</h1>
                        </div>
                        <div class="grid__item grid__item--lg-span-4">
                            <a class="btn-budget" href="{{ route('contacts', app()->getLocale()) }}" title="{{ __('messages.budget.button')}}">{{ __('messages.budget.button')}}</a>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>  
    </div>  
</div>

@stop


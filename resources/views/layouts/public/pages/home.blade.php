@extends('layouts.public.publicMaster') 

@section('title', 'Home')

@section('content')

<!-- Loader -->
<div class="loading"></div>

<div id="carousel">
    <ul class="carousel-list">
        @foreach ($slides as $slider)
            <li style="background-image: url('{{ $slider->path }}');">
                <div class="carousel-title">
                    <h2><a href="#">{{ json_decode($slider->title) }}</a></h2>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="carousel-dots align-center"></div>
</div>

<div id="mission" class="style-1">
    <div class="mission">
        <div class="container">
            <div class="grid">
                <div class="grid__item grid__item--md-span-6 grid__item--sm-span-12 mission-slogan">
                    <h1 class="header_underline">{{ json_decode($mission->title)}}</h1>
                    <p> {{ json_decode($mission->body)}}</p>
                    <a class="btn-static align-right" href="{{ route('about', app()->getLocale()) }}" title="{{ __('messages.more-about-us')}}">{{ __('messages.more-about-us')}}</a>
                </div>
                <div class="grid__item grid__item--md-span-6 grid__item--sm-span-12 mission-photo">
                    <img class="img_responsive" src="{!! asset('img/mission.jpg') !!}" alt="{{ json_decode($mission->title)}}">
                </div>
            </div>
        </div>
    </div>    
</div>
<div id="services" style="background-image: url('{!! asset('img/services.jpg') !!}');">
    <div class="grey-fade-over" style="opacity: 0.8; z-index: 1;"></div>
    <div class="services">
        <div class="container">
            <div class="grid">
                @foreach ($services as $service)
                    <div class="grid__item grid__item--lg-span-4 services-item">
                        @if ($service->id < 10)
                            <h1>0{{ $service->id }}.</h1>
                        @else
                            <h1>{{ $service->id }}.</h1>
                        @endif
                        <h2>{{ json_decode($service->title) }}</h2>
                        {!! json_decode(urldecode($service->body)) !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>                    
</div>

<div id="reviews" class="style-1">
    <div class="container">

        <div class="reviews align-center">

            <section class="reviews-container reviews-slider">

                <div class="reviews-title">{{ __('messages.real-histories')}}</div>

                <div class="reviews-list slider-wrap">

                    @foreach ($comments as $comment)
                        <div class="reviews-item reviews-slide">
                            <div class="reviews-item-info">
                                <p class="reviews-item-message">
                                    {{ json_decode($comment->body) }}
                                </p>
                                <div class="reviews-item-figure">
                                    <img src="{{ $comment->photo }}"
                                        alt="{{ $comment->name }}" class="reviews-item-image" width="70" height="70">
                                    <div class="reviews-item-name">{{ $comment->name }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

                <div class="reviews-controllers align-right">
                    <button tabindex="0" class="reviews-controllers-button slider-control-prev">
                        <i class="fas fa-long-arrow-alt-left fa-2x"></i>
                    </button>
                    <button tabindex="0" class="reviews-controllers-button slider-control-next">
                        <i class="fas fa-long-arrow-alt-right fa-2x"></i>
                    </button>
                </div>
            </section>

        </div>

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


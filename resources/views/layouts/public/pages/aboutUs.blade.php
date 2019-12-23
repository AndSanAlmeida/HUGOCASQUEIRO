@extends('layouts.public.publicMaster') 

@section('title', 'About Us')

@section('content')
    
<div id="aboutUs" style="background-image: url('{!! asset('img/test/aboutUs2.jpg') !!}');">
    <div class="aboutUs">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                <h1 class="aboutUs-title">{{ json_decode($about->title)}}</h1>
                    <p class="aboutUs-text">{{ json_decode($about->body)}}</p>
                    <ul class="aboutUs-socials">
                        <li><i class="fas fa-circle fb"></i><a href="#" class="fbh" title="Facebook">Fb</a></li>
                        <li><i class="fas fa-circle in"></i><a href="#" class="inh" title="Instagram">In</a></li>
                        <li><i class="fas fa-circle li"></i><a href="#" class="lih" title="LinkedIn">Li</a></li>
                    </ul>
                <a class="btn" href="{{ route('portfolio', app()->getLocale()) }}" title="{{ __('messages.watch-portfolio')}}">@lang('messages.watch-portfolio')</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="style-1">
    <div id="members">
        <div class="members">
            <div class="container">
                <h5 class="members-title align-center">{{ __('messages.about-us.team.team')}}</h5>
                <h2 class="members-subtitle align-center">{{ __('messages.about-us.team.title')}}</h2>
                <p class="members-text align-center">{{ __('messages.about-us.team.slogan')}}</p> 
                <div class="grid">
                    <div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
                        <div class="members-profile align-center">
                            <img src="{!! asset('img/profiles/p1.jpg') !!}" alt="Teste">
                            <div class="members-overlay"></div>  
                            <h6>Hugo Casqueiro</h6>  
                            <p>Owner</p>
                            <ul class="members-profile-socials">
                                <li><i class="fas fa-circle fb"></i><a href="#" class="fbh" title="Facebook">Fb</a></li>
                                <li><i class="fas fa-circle in"></i><a href="#" class="inh" title="Instagram">In</a></li>
                                <li><i class="fas fa-circle li"></i><a href="#" class="lih" title="LinkedIn">Li</a></li>
                            </ul>                                    
                        </div>
                    </div>
                    <div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
                        <div class="members-profile align-center">
                            <img src="{!! asset('img/profiles/p2.jpg') !!}" alt="Teste">
                            <div class="members-overlay"></div>  
                            <h6>Irmão</h6>
                            <p>Media Manager</p>
                            <ul class="members-profile-socials">
                                <li><i class="fas fa-circle fb"></i><a href="#" class="fbh" title="Facebook">Fb</a></li>
                                <li><i class="fas fa-circle in"></i><a href="#" class="inh" title="Instagram">In</a></li>
                                <li><i class="fas fa-circle li"></i><a href="#" class="lih" title="LinkedIn">Li</a></li>
                            </ul>                                             
                        </div>
                    </div>
                    <div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
                        <div class="members-profile align-center">
                            <img src="{!! asset('img/profiles/p3.jpg') !!}" alt="Teste">
                            <div class="members-overlay"></div>  
                            <h6>Pai</h6>  
                            <p>Manager</p>
                            <ul class="members-profile-socials">
                                <li><i class="fas fa-circle fb"></i><a href="#" class="fbh" title="Facebook">Fb</a></li>
                                <li><i class="fas fa-circle in"></i><a href="#" class="inh" title="Instagram">In</a></li>
                                <li><i class="fas fa-circle li"></i><a href="#" class="lih" title="LinkedIn">Li</a></li>
                            </ul>                                              
                        </div>
                    </div>
                </div>         
            </div>
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


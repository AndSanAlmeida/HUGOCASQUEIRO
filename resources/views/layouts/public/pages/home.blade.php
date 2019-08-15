@extends('layouts.public.publicMaster') 

@section('title', 'Home')

@section('content')

<div id="carousel">
    <div class="flexbox">
        <div class="flexbox_item">
            <div class="logo_home_image">
                <img class="img_responsive" src="{!! asset('img/logo.svg') !!}" alt="Logo">
            </div>
        </div>
    </div>
    <ul class="carousel-list">
        <li style="background-image: url('{!! asset('img/slide_01.jpg') !!}');"></li>
        <li style="background-image: url('{!! asset('img/slide_02.jpg') !!}');"></li>
        <li style="background-image: url('{!! asset('img/slide_03.jpg') !!}');"></li>
    </ul>
    <div class="carousel-dots"></div>
</div>

<div class="style-1">
    <div class="container">
        <section id="about-us">
            <div class="grid">
                <div class="grid__item grid__item--lg-span-4 grid__item--md-span-12">
                    <h2 class="header_underline">Sobre Nós</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a class="btn btn-primary align-right" href="#">See more</a>
                </div>
                <div class="grid__item grid__item--lg-span-8 grid__item--md-span-12">
                    <img class="img_responsive" src="{!! asset('img/about.jpg') !!}" alt="about_us">
                </div>
            </div>
        </section>
    </div>
</div>

<div class="style-2">
    <div class="container">
        <section id="services">
            <div class="grid">
                <div class="grid__item grid__item--sm-span-12">
                    <div class="services_item">
                        <div class="grid">
                            <div class="grid__item grid__item--md-span-5">
                                <img class="img_responsive" src="{!! asset('img/services.jpg') !!}" alt="Firewood"></img>
                            </div>
                            <div class="grid__item grid__item--md-span-7">
                                <div class="services_item_info">
                                    <h3 class="header_underline">Serviço</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-primary align-left" href="#">See more</a>
                                </div>                                
                            </div>
                        </div>
                    </div> 
                    <div class="services_item">
                        <div class="grid">                            
                            <div class="grid__item grid__item--md-span-7">
                                <div class="services_item_info">
                                    <h3 class="header_underline">Serviço</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-primary align-left" href="#">See more</a>
                                </div>                                
                            </div>
                            <div class="grid__item grid__item--md-span-5">
                                <img class="img_responsive" src="{!! asset('img/services.jpg') !!}" alt="Firewood"></img>
                            </div>
                        </div>
                    </div> 
                    <div class="services_item">
                        <div class="grid">
                            <div class="grid__item grid__item--md-span-5">
                                <img class="img_responsive" src="{!! asset('img/services.jpg') !!}" alt="Firewood"></img>
                            </div>
                            <div class="grid__item grid__item--md-span-7">
                                <div class="services_item_info">
                                    <h3 class="header_underline">Serviço</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-primary align-left" href="#">See more</a>
                                </div>                                
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
    </div>
</div>

@stop


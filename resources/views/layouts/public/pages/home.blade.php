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

<div class="style-1">
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
            <symbol id="slider-arrow" viewBox="0 0 492.004 492.004">
                <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
                    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
                    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
                    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" />
            </symbol>
        </svg>

        <div class="reviews">

            <section class="reviews-container reviews-slider">
                <div class="reviews-list slider-wrap">
                    <div class="reviews-item reviews-slide">
                        <figure class="reviews-item-figure">
                            <picture>
                                <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                    alt="John" class="reviews-item-image">
                            </picture>
                        </figure>
                        <div class="reviews-item-info">
                            <div class="reviews-item-name">John</div>
                            <p class="reviews-item-message">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo
                                iusto quae nobis nam est fugit beatae. Velit eos in consectetur perferendis labore adipisci?
                                Natus,
                                voluptatibus.
                            </p>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <figure class="reviews-item-figure">
                            <picture>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC2m9xDB6b4M5HoiOPaXQHVVJdiz_a3YRiU7MSyRIvSyzJP2e5UQ"
                                    alt="John" class="reviews-item-image">
                            </picture>
                        </figure>
                        <div class="reviews-item-info">
                            <div class="reviews-item-name">Dinash</div>
                            <p class="reviews-item-message">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo
                                iusto quae nobis nam est fugit beatae. Velit eos in consectetur perferendis labore adipisci?
                                Natus,
                                voluptatibus.
                            </p>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <figure class="reviews-item-figure">
                            <picture>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC2m9xDB6b4M5HoiOPaXQHVVJdiz_a3YRiU7MSyRIvSyzJP2e5UQ"
                                    alt="John" class="reviews-item-image">
                            </picture>
                        </figure>
                        <div class="reviews-item-info">
                            <div class="reviews-item-name">Dinash</div>
                            <p class="reviews-item-message">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo
                                iusto quae nobis nam est fugit beatae. Velit eos in consectetur perferendis labore adipisci?
                                Natus,
                                voluptatibus.
                            </p>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <figure class="reviews-item-figure">
                            <picture>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC2m9xDB6b4M5HoiOPaXQHVVJdiz_a3YRiU7MSyRIvSyzJP2e5UQ"
                                    alt="John" class="reviews-item-image">
                            </picture>
                        </figure>
                        <div class="reviews-item-info">
                            <div class="reviews-item-name">Dinash</div>
                            <p class="reviews-item-message">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo
                                iusto quae nobis nam est fugit beatae. Velit eos in consectetur perferendis labore adipisci?
                                Natus,
                                voluptatibus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="reviews-controllers">
                    <button tabindex="0" class="reviews-controllers-button slider-control-prev">
                        <svg class="reviews-controllers-icon">
                            <use xlink:href="#slider-arrow">
                        </svg>
                    </button>
                    <button tabindex="0" class="reviews-controllers-button slider-control-next">
                        <svg class="reviews-controllers-icon">
                            <use xlink:href="#slider-arrow">
                        </svg>
                    </button>
                </div>
            </section>

        </div>

    </div>
</div>

@stop


@extends('layouts.public.publicMaster') 

@section('title', 'Home')

@section('content')

<div id="carousel">
    <ul class="carousel-list">
        <li style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
            <div class="carousel-title">
                <h2><a href="#">Lorem ipsum.</a></h2>
            </div>
        </li>
        <li style="background-image: url('{!! asset('img/slide_02.jpg') !!}');">
            <div class="carousel-title">
                <h2><a href="#">Lorem ipsum dolor.</a></h2>
            </div>
        </li>
    </ul>
    <div class="carousel-dots align-center"></div>
</div>

<div id="mission" class="style-1">
    <div class="mission">
        <div class="container">
            <div class="grid">
                <div class="grid__item grid__item--md-span-6 grid__item--sm-span-12 mission-slogan">
                    <h1 class="header_underline">Our Mission</h1>
                    <p> Our mission is to produce the highest quality work for every client, on every project.</p>
                    <a class="btn-static align-right" href="{{ url('/aboutUs', app()->getLocale()) }}" title="More about us">More about us</a>
                </div>
                <div class="grid__item grid__item--md-span-6 grid__item--sm-span-12 mission-photo">
                    <img class="img_responsive" src="{!! asset('img/mission.jpg') !!}" alt="Our Mission">
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
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>01.</h1>
                    <h2>Carpintaria Interior</h2>
                    <ul>
                        <li>Portas de interior e portas de entrada</li>    
                        <li>Janelas em madeira e PVC</li>
                        <li>Roupeiros, armários e closets</li>
                        <li>Móveis de casa de banho</li>
                        <li>Todo o tipo de mobiliário sobre medida (mesas, camas, entre outros…)</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>02.</h1>
                    <h2>Carpintaria Exterior</h2>
                    <ul>
                        <li>Revestimento de paredes, fachadas em madeira maciça e aglomerados</li>
                        <li>Terraços em deck compósito e madeira</li>
                        <li>Alpendres e cobertos em madeira</li>
                        <li>Cabanas de jardim</li>
                        <li>Revestimento de Jacuzzis e piscinas exteriores</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>03.</h1>
                    <h2>Escadaria Interior e Exterior</h2>
                    <ul>
                        <li>Todo o tipo de escadaria em madeira com acabamento em verniz ou velatura</li>                  
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>04.</h1>
                    <h2>Pavimentos</h2>
                    <ul>
                        <li>Piso flutuante em madeira e estratificado laminado</li>
                        <li>Lamparquet colado ao chão em madeira maciça </li>
                        <li>Soalhos em madeira</li>
                        <li>Rodapés em madeira e laminados</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>05.</h1>
                    <h2>Cozinhas</h2>
                    <ul>
                        <li>Conceção com projeto em 3D, fabricação e montagem de cozinhas modernas e tradicionais com um vasto leque de cores e padrões em melamina, termolaminado, madeira maciça e lacado MDF</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>06.</h1>
                    <h2>Renovação e Restauração</h2>
                    <ul>
                        <li>Todo o tipo de renovação e tratamento de madeira maciça em móveis, fachadas e pisos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>                    
</div>

<div id="reviews" class="style-1">
    <div class="container">

        <div class="reviews align-center">

            <section class="reviews-container reviews-slider">

                <div class="reviews-title">Histórias Reais</div>

                <div class="reviews-list slider-wrap">
                    <div class="reviews-item reviews-slide">
                        <div class="reviews-item-info">
                            <p class="reviews-item-message">
                                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo iusto quae nobis nam est fugit beatae."
                            </p>
                            <div class="reviews-item-figure">
                                <img src="{!! asset('img/profiles/p1.jpg') !!}"
                                    alt="John" class="reviews-item-image" width="70" height="70">
                                <div class="reviews-item-name">John</div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <div class="reviews-item-info">
                            <p class="reviews-item-message">
                                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo iusto quae nobis nam est fugit beatae."
                            </p>
                            <div class="reviews-item-figure">
                                <img src="{!! asset('img/profiles/p2.jpg') !!}"
                                    alt="John" class="reviews-item-image" width="70" height="70">
                                <div class="reviews-item-name">John</div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <div class="reviews-item-info">
                            <p class="reviews-item-message">
                                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo iusto quae nobis nam est fugit beatae."
                            </p>
                            <div class="reviews-item-figure">
                                <img src="{!! asset('img/profiles/p3.jpg') !!}"
                                    alt="John" class="reviews-item-image" width="70" height="70">
                                <div class="reviews-item-name">John</div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-item reviews-slide">
                        <div class="reviews-item-info">
                            <p class="reviews-item-message">
                                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe
                                nemo iusto quae nobis nam est fugit beatae."
                            </p>
                            <div class="reviews-item-figure">
                                <img src="{!! asset('img/profiles/p1.jpg') !!}"
                                    alt="John" class="reviews-item-image" width="70" height="70">
                                <div class="reviews-item-name">John</div>
                            </div>
                        </div>
                    </div>
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
                            <h1>Peça já o seu Orçamento.</h1>
                        </div>
                        <div class="grid__item grid__item--lg-span-4">
                            <a class="btn-budget" href="{{ url('/contacts') }}" title="Entrar em contacto">Entrar em contacto</a>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>  
    </div>  
</div>

@stop


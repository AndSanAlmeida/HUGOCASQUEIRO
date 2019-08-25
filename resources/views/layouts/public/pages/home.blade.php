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

<div id="mission" class="style-1">
    <div class="container">
        <div class="grid">
            <div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
                <h2 class="header_underline">Our Mission</h2>
                <p> Our mission is to produce the highest quality work for every client, on every project.</p>
                <a class="btn btn-primary align-right" href="#">More about us</a>
            </div>
            <div class="grid__item grid__item--md-span-8 grid__item--sm-span-12">
                <img class="img_responsive" src="{!! asset('img/our_mission.jpg') !!}" alt="Our Mission">
            </div>
        </div>
    </div>
</div>

<!--<div class="style-2">
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
</div>-->

<div id="services" style="background-image: url('{!! asset('img/services2.jpg') !!}');">
    <div class="grey-fade-over" style="opacity: 0.8; z-index: 1;"></div>
    <div class="services">
        <div class="container">
            <div class="grid">
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>01.</h1>
                    <h2>Carpintaria Interior e Exterior</h2>
                    <ul>
                        <li>Portaros</li>
                        <li>Janelas em Madeira e PVC</li>
                        <li>Escadarias</li>
                        <li>Parquet / Piso Flutuante / Terraços Deck (...)</li>
                        <li>Alpendres em Madeira</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>02.</h1>
                    <h2>Mobiliário</h2>
                    <ul>
                        <li>Quartos Completos</li>
                        <li>Roupeiros / Armários / Closets</li>
                        <li>Casas de Banho</li>
                        <li>Renovação e Restauração de todo o tipo de Mobiliário e Carpintarias em Madeira Maciça.</li>
                    </ul>
                </div>
                <div class="grid__item grid__item--lg-span-4 services-item">
                    <h1>03.</h1>
                    <h2>Cozinhas por Medida</h2>
                    <ul>
                        <li>Modernas e Tradicionais (Madeira Maciça, Melamica e Lacada MDF)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>                    
    </div>  
</div>

<div id="reviews" class="style-1">
    <div class="container">

        <div class="reviews">

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
                                <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
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
                                <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
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
                                <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
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
                                <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                                    alt="John" class="reviews-item-image" width="70" height="70">
                                <div class="reviews-item-name">John</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reviews-controllers">
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

@stop


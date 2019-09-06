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
                    <a class="btn-static align-right" href="#" title="More about us">More about us</a>
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
                                <a class="btn-budget" href="#" title="Entrar em contacto">Entrar em contacto</a>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>  
    </div>  
</div>

@stop


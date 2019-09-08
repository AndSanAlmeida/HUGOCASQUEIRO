@extends('layouts.public.publicMaster') 

@section('title', 'Portfólio')

@section('content')

<div id="portfolio">
    <div class="portfolio" style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <h1 class="main-title">Portfólio</h1>
                    <p class="main-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="isotope">
        <div class="container">
            <div class="isotope-sorters">
                <ul class="align-center">
                    <li data-filter="*" class="active">Todos</li>
                    <li data-filter=".interior">Interior</li>
                    <li data-filter=".exterior">Exterior</li>
                    <li data-filter=".cozinha">Cozinha</li>
                </ul>
            </div>
            <div class="isotope-list">
                <div class="isotope-item interior">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">Design, Rústico</p>     
                    </div>
                </div> 
                <div class="isotope-item exterior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>                                           
                </div> 
                <div class="isotope-item cozinha">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item interior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item exterior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item cozinha">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div>  
                <div class="isotope-item interior">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item exterior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item cozinha">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item interior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item exterior">
                    <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Porta Rustica</h5>
                        <p class="on-center align-center">31/07/2019</p>     
                    </div>
                </div> 
                <div class="isotope-item cozinha">
                    <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                    <div class="item-mask">
                        <h5 class="on-center align-center">Caixa de Joias</h5>
                        <p class="on-center align-center">31/07/2019</p>     
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


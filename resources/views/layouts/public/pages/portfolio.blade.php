@extends('layouts.public.publicMaster') 

@section('title', 'Portfólio')

@section('content')

<div id="portfolio">
    <div class="parallax-portfolio" style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
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

    <div class="style-1">
        <div class="container">
            <div id="isotope">
                <div class="isotope-sorters">
                    <ul>
                        <li data-filter="*" class="active">All</li>
                        <li data-filter=".running">Running</li>
                        <li data-filter=".gym">Gym</li>
                        <li data-filter=".swimming">Swimming</li>
                    </ul>
                </div>
                <div class="isotope-list">
                    <div class="isotope-item running">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">Design, Rústico</p>     
                        </div>
                    </div> 
                    <div class="isotope-item gym">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>                                           
                    </div> 
                    <div class="isotope-item swimming">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item running">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item gym">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item swimming">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div>  
                    <div class="isotope-item running">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item gym">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item swimming">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item running">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item gym">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Porta Rustica</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div> 
                    <div class="isotope-item swimming">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="item-mask">
                            <h5 class="on-center">Caixa de Joias</h5>
                            <p class="on-center">31/07/2019</p>     
                        </div>
                    </div>                        
                </div>
            </div>
        </div>      
    </div>
</div>

@stop


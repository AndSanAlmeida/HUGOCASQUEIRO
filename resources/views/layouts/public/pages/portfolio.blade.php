@extends('layouts.public.publicMaster') 

@section('title', 'Portfólio')

@section('content')

<!-- Loader -->
<div class="loading"></div>

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
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}">           
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>                       
                    </a>                     
                </div> 
                <div class="isotope-item exterior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>                                                
                    </a>
                </div> 
                <div class="isotope-item cozinha">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item interior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item exterior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item cozinha">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div>  
                <div class="isotope-item interior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item exterior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item cozinha">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item interior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item exterior">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item02.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Porta Rustica</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div> 
                <div class="isotope-item cozinha">
                    <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem" data-group="image-1" data-title="Image Title!">
                        <img class="img_responsive" src="{!! asset('img/item01.jpg') !!}" alt="">
                        <div class="isotope-overlay"></div>
                        <h5 class="align-center">Caixa de Joias</h5>
                        <p class="align-center">Design, Rústico</p>     
                    </a>
                </div>                     
            </div>
        </div>  
    </div>

    <!-- HIDE GALLERIES -->
    <div class="hide">
        <a href="{!! asset('img/item02.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
        <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
        <a href="{!! asset('img/item02.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
        <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
        <a href="{!! asset('img/item01.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
        <a href="{!! asset('img/item02.jpg') !!}" class="galleryItem hide" data-group="image-1" data-title="Image Title!"></a>
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
</div>

<script>
    //LOADER
    window.onload = function() {
        $('.loading').fadeOut(); 
    }
</script>

@stop


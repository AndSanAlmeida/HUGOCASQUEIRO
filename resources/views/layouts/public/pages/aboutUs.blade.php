@extends('layouts.public.publicMaster') 

@section('title', 'About Us')

@section('content')
    
<div id="aboutUs" style="background-image: url('{!! asset('img/test/aboutUs2.jpg') !!}');">
    <div class="aboutUs">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <h1 class="aboutUs-title">Sobre Nós</h1>
                    <p class="aboutUs-text">Somos uma empresa jovem e profissional sediada em Mira de Aire, distrito de Leiria, fundada em 2020. Com mais de 10 anos de experiência na conceção, fabricação e montagem de todo o tipo de carpintaria interior e exterior, o nosso principal objetivo é a satisfação do cliente, oferecendo-lhe serviços de carpintaria de grande qualidade e excelência!</p>
                    <ul class="aboutUs-socials">
                        <li><i class="fas fa-circle fb"></i><a href="#" class="fbh" title="Facebook">Fb</a></li>
                        <li><i class="fas fa-circle in"></i><a href="#" class="inh" title="Instagram">In</a></li>
                        <li><i class="fas fa-circle li"></i><a href="#" class="lih" title="LinkedIn">Li</a></li>
                    </ul>
                    <a class="btn" href="{{ url('/portfolio') }}" title="Ver Portfólio">Ver Portfólio</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="style-1">
    <div id="members">
        <div class="members">
            <div class="container">
                <h5 class="members-title align-center">A nossa equipa</h5>
                <h2 class="members-subtitle align-center">Equipa de Profissionais.</h2>
                <p class="members-text align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
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

@stop


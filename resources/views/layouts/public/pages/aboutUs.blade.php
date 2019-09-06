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
                        <li><i class="fas fa-circle tw"></i><a href="#" class="twh" title="Twitter">Tw</a></li>
                    </ul>
                    <a class="btn" href="#" title="Ver Portfólio">Ver Portfólio</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="style-1">
    <div id="members">
        <div class="members">
            <div class="container">
                
            </div>
        </div>
    </div>
</div>

@stop


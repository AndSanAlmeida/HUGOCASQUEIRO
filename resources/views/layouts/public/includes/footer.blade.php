<div class="style-3">
    <div id="goToTop">
        <i class="fas fa-chevron-circle-up fa-2x" title="Go To Top"></i>
    </div>
    <div class="container">
        <footer id="footer">
            <div class="grid footer_header">
                <div class="grid__item grid__item--md-span-4 footer_header_item">
                    <h5 class="header_underline">{{ __('messages.pages')}}</h5>
                    <ul>
                        <li><a href="{{ url('/home') }}" title="{{ __('messages.home')}}">{{ __('messages.home')}}</a></li>
                        <li><a href="{{ url('/aboutUs') }}" title="{{ __('messages.about-us')}}">{{ __('messages.about-us')}}</a></li>
                        <li><a href="{{ url('/portfolio') }}" title="{{ __('messages.portfolio')}}">{{ __('messages.portfolio')}}</a></li>  
                        <!--<li><a href="#" title="Catálogo" target="_blank">Catálogo</a></li>-->                  
                        <li><a href="{{ url('/contacts') }}" title="{{ __('messages.contacts')}}">{{ __('messages.contacts')}}</a></li>
                    </ul>
                </div>
                <div class="grid__item grid__item--md-span-4 footer_header_item">
                    <h5 class="header_underline">{{ __('messages.socials')}}</h5>
                    <ul>
                        <li><a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook"></i>&nbsp;Facebook</a></li>
                        <li><a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i>&nbsp;Instagram</a></li>
                        <li><a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i>&nbsp;LinkedIn</a></li>
                    </ul>
                </div>
                <div class="grid__item grid__item--md-span-4 footer_header_item">
                    <h3>Hugo Casqueiro</h3>
                    <ul>
                        <hr class="dotted" />
                        <li><a href="mailto:hugocasqueiro@teste.com?Subject=hugocasquerio.pt%20|%20MAIL" target="_top" title="Enviar Email"><i class="fas fa-envelope contrast-color"></i>&nbsp;carpintariahc@gmail.com</a></li>
                        <li><i class="fas fa-phone contrast-color"></i>&nbsp;+351 919 123 654</li>
                        <li><i class="fas fa-address-card contrast-color"></i>&nbsp;Mira De Aire</li>
                        <hr class="dotted" />
                    </ul>
                </div>
            </div>
            <div class="grid footer_footer">
                <div class="grid__item grid__item--md-span-12">
                    <p class="align-center">Copyright <i class="far fa-copyright contrast-color"></i> <?php echo date("Y"); ?> Hugo Casqueiro by <a href="https://www.linkedin.com/in/andsanalmeida/" target="_blank" title="André Almeida - LinkedIn"><b class="contrast-color">André Almeida</b></a></p>
                </div>
            </div>
        </footer>
    </div>       
</div>  
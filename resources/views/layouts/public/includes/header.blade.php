<header id="header">
	<div id="nav" class="navbar">
		<a class="title" href="{{ route('home', app()->getLocale())}}" title="Início">
			<img class="hcW" src="{!! asset('img/hcN.png') !!}" alt="Hugo Casqueiro">
			<img class="hcG" src="{!! asset('img/hcG.png') !!}" alt="Hugo Casqueiro">
			<h1> | Carpintaria <span>- Marcenaria</span></h1>
		</a>
	    <nav>
	        <ul class="nav-links">
	            <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(),'pt') }}" title="Português"><img src="{!! asset('img/flags/portugal.svg') !!}" alt="Portugal" width="40" height="40"></a></li>       
	            <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}" title="Inglês"><img src="{!! asset('img/flags/united-kingdom.svg') !!}" alt="Inglaterra" width="40" height="40"></a></li>
	            <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'fr') }}" title="Francês"><img src="{!! asset('img/flags/france.svg') !!}" alt="França" width="40" height="40"></a></li>
	            <li><a id="nav-toggler"><i class="fas fa-bars" title="Menu"></i> Menu</a></li>
	        </ul>
	    </nav>
	</div>
	<div id="sidenav">
		<nav>
		<a href="{{ route('home', app()->getLocale())}}" class="link" title="{{ __('messages.home')}}">@lang('messages.home')</a>
            <a href="{{ route('about', app()->getLocale())}}" class="link" title="{{ __('messages.about-us')}}">@lang('messages.about-us')</a>
	        <a href="{{ route('portfolio', app()->getLocale())}}" class="link" title="{{ __('messages.portfolio')}}">@lang('messages.portfolio')</a>
            <!--<a href="#" class="link" title="Catálogo" target="_blank">Catálogo</a>-->
			<a href="{{ route('contacts', app()->getLocale())}}" class="link" title="{{ __('messages.contacts')}}">@lang('messages.contacts')</a>
            <ul class="sidenav-languages align-center">
                <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'pt') }}" title="Português"><img src="{!! asset('img/flags/portugal.svg') !!}" alt="Portugal" width="40" height="40"></a></li>       
                <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}" title="Inglês"><img src="{!! asset('img/flags/united-kingdom.svg') !!}" alt="Inglaterra" width="40" height="40"></a></li>
                <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'fr') }}" title="Francês"><img src="{!! asset('img/flags/france.svg') !!}" alt="França" width="40" height="40"></a></li>
            </ul>
		</nav>
		<a id="close-sidenav" class="close" title="Fechar"><i class="fas fa-times"></i></a>
	</div>
</header>
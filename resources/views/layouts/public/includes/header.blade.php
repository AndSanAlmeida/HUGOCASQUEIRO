<header id="header">
	<div id="nav" class="navbar">
		<a class="title" href="{{ url('/')}}" title="Início">
			<img class="hcW" src="{!! asset('img/hcW.png') !!}" alt="Hugo Casqueiro">
			<img class="hcG" src="{!! asset('img/hcG.png') !!}" alt="Hugo Casqueiro">
			<h1> | Carpintaria <span>- Marcenaria</span></h1>
		</a>
	    <nav>
	        <ul class="nav-links">
	            <li><a href="#" title="Português"><img src="{!! asset('img/flags/portugal.svg') !!}" alt="Portugal" width="40" height="40"></a></li>       
	            <li><a href="#" title="Inglês"><img src="{!! asset('img/flags/united-kingdom.svg') !!}" alt="Inglaterra" width="40" height="40"></a></li>
	            <li><a href="#" title="Francês"><img src="{!! asset('img/flags/france.svg') !!}" alt="França" width="40" height="40"></a></li>
	            <li><a id="nav-toggler"><i class="fas fa-bars" title="Menu"></i> Menu</a></li>
	        </ul>
	    </nav>
	</div>
	<div id="sidenav">
		<nav>
			<a href="{{ url('/') }}" class="link" title="Início">Início</a>
            <a href="{{ url('/aboutUs') }}" class="link" title="Sobre Nós">Sobre Nós</a>
	        <a href="{{ url('/portfolio') }}" class="link" title="Portfólio">Portfólio</a>
            <a href="#" class="link" title="Catálogo" target="_blank">Catálogo</a>
			<a href="{{ url('/contacts') }}" class="link" title="Contactos">Contactos</a>
            <ul class="sidenav-languages align-center">
                <li><a href="#" title="Português"><img src="{!! asset('img/flags/portugal.svg') !!}" alt="Portugal" width="40" height="40"></a></li>       
                <li><a href="#" title="Inglês"><img src="{!! asset('img/flags/united-kingdom.svg') !!}" alt="Inglaterra" width="40" height="40"></a></li>
                <li><a href="#" title="Francês"><img src="{!! asset('img/flags/france.svg') !!}" alt="França" width="40" height="40"></a></li>
            </ul>
		</nav>
		<a id="close-sidenav" class="close" title="Fechar"><i class="fas fa-times"></i></a>
	</div>
</header>
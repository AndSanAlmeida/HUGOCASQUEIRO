<header id="header">
	<div id="nav" class="navbar">
		<h1><a class="title" href="{{ url('/')}}">HC | Marcenaria - Carpintaria</a></h1>
	    <nav>
	        <ul class="nav-links">
	            <li><a href="#" title="Português"><img src="{!! asset('img/flags/portugal.svg') !!}" alt="Portugal" width="40" height="40"></a></li>	            
	            <li><a href="#" title="Inglês"><img src="{!! asset('img/flags/united-kingdom.svg') !!}" alt="Inglaterra" width="40" height="40"></a></li>
	            <li><a href="#" title="Francês"><img src="{!! asset('img/flags/france.svg') !!}" alt="França" width="40" height="40"></a></li>
	            <li><a id="nav-toggler"><i class="fas fa-bars"></i> Menu</a></li>
	        </ul>
	    </nav>
	</div>
	<div id="sidenav">
		<nav>
			<a href="{{ url('/') }}" class="link" title="Início">Início</a>
            <a href="{{ url('/aboutUs') }}" class="link" title="Sobre Nós">Sobre</a>
	        <a href="{{ url('/portfolio') }}" class="link" title="Portfólio">Portfólio</a>
            <a href="#" class="link" title="Catálogo">Catálogo</a>
			<a href="{{ url('/contacts') }}" class="link" title="Contactos">Contactos</a>
		</nav>
		<a id="close-sidenav" class="close"><i class="fas fa-times"></i></a>
	</div>
</header>
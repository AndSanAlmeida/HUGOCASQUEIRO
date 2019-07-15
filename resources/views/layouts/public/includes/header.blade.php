<header id="header">
	<div id="nav" class="navbar">
		<h1><a class="title" href="#">HUGO CASQUEIRO</a></h1>
	    <nav>
	        <ul class="nav-links">
	            <!--<li><a href="#" title="">Sobre Nós</a></li>	            
	            <li><a href="#" title="">Lenha</a></li>
	            <li><a href="#" title="">Brita</a></li>
	            <li><a href="#" title="">Limpeza de Terrenos</a></li>
	            <li><a href="#" title="">Contactos</a></li>-->
	            <li><a id="nav-toggler"><i class="fas fa-bars"></i> Menu</a></li>
	        </ul>
	    </nav>
	</div>
	<div id="sidenav">
		<nav>
			<a href="#" class="link" title="">Início</a>
	        <a href="#" class="link" title="">Lenha</a>
	        <a href="#" class="link" title="">Brita</a>
			<a href="#" class="link" title="">Limpeza de Terrenos</a>
			<a href="#" class="link" title="">Contactos</a>
		</nav>
		<a id="close-sidenav" class="close"><i class="fas fa-times"></i></a>
	</div>
	<div id="carousel">
		<ul class="carousel-list">
			<li style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
                <div class="carousel-title">
                    <h1>Firewood.</h1>
                </div>
            </li>
			<li style="background-image: url('{!! asset('img/slide_02.jpg') !!}');">
                <div class="carousel-title">
                    <h1>Gravel.</h1>
                </div>
            </li>
			<li style="background-image: url('{!! asset('img/slide_03.jpg') !!}');">
                <div class="carousel-title">
                    <h1>Florest cleaning.</h1>
                </div>
            </li>
		</ul>
		<div class="carousel-dots"></div>
	</div>
</header>
@extends('layouts.public.publicMaster') 

@section('title', 'Contacts')

@section('content')

<div id="contacts">
	<div class="contacts" style="background-image: url('{!! asset('img/contacts.jpg') !!}');">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <h1 class="main-title">Contactos</h1>
                    <p class="main-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contactForm">
	<div class="contactForm">
		<div class="container">
			<h2 class="contactForm-title align-center">Entrar em Contacto</h2>
			<p class="contactForm-subtitle align-center">Vamos falar sobre o seu projeto!</p>
			<form method="POST">
				<div class="grid">
					<div class="grid__item grid__item--md-span-6 grid__item--sm-span-12">
						<input class="form-control" type="text" name="name" placeholder="Nome *" required>
					</div>	
					<div class="grid__item grid__item--md-span-6 grid__item--sm-span-12">
						<input class="form-control" type="email" name="email" placeholder="Email *" required>
					</div>
					<div class="grid__item grid__item-md--span-12">
						<textarea class="form-control" name="message" placeholder="Conte-nos tudo *" required></textarea>
					</div>
					<div class="grid__item grid__item-md--span-12 align-center">
						<input class="btn-static" type="submit" name="submeter" value="submeter">
					</div>						
				</div>				
			</form>			
		</div>
	</div>
</div>

<div id="contactDetails">
	<div class="contactDetails">
		<div class="container">

			<hr class="dotted"></hr>

			<div class="grid align-center">
				<div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
					<i class="fas fa-phone-alt fa-3x contrast-color"></i>
					<h5 class="contactDetails-info">+351 249533780</h5>
				</div>
				<div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
					<i class="fas fa-mobile-alt fa-3x contrast-color"></i>
					<h5 class="contactDetails-info">+351 915507135</h5>
				</div>
				<div class="grid__item grid__item--md-span-4 grid__item--sm-span-12">
					<i class="far fa-envelope-open fa-3x contrast-color"></i>
					<h5 class="contactDetails-info">hugocasqueiro@gmail.com</h5>
				</div>
			</div>

		</div>
	</div>
</div>

<div id="map">
	<iframe src="https://maps.google.com/maps?q=Mira%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>

<!--<script>
	function initMap() {
		var myLatLong = {lat: 39.6270489, lng: -8.6720917};
		var image = 'img/marker.svg';
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: myLatLong,
			scrollwheel: false
		});
		var marker = new google.maps.Marker({
			position: myLatLong,
			map: map,
			icon: image
		});
		google.maps.event.addDomListener(window, 'resize', function() {
		var center = map.getCenter()
		google.maps.event.trigger(map, "resize")
		map.setCenter(center)
		})
	}
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8Hh9lM9JzNE4i2lr04VWiYejLwDpSQo0&callback=initMap">
</script>-->
    
@stop


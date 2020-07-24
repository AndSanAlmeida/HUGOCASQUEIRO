@extends('layouts.public.publicMaster') 

@section('title', 'Contacts')

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: '/{{ app()->getLocale()}}/sendEmail'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
    </script>
@stop

@section('content')

<div id="contacts">
	<div class="contacts" style="background-image: url('{!! asset('img/contacts.jpg') !!}');">
        <div class="flexbox">
            <div class="flexbox_item">
                <div class="grey-fade-over"></div>
                <div class="container">
                    <h1 class="main-title">{{ __('messages.contacts.title')}}</h1>
                    <p class="main-subtitle">{{ __('messages.contacts.slogan')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contactForm">
	<div class="contactForm">
		<div class="container">
			<h2 class="contactForm-title align-center">{{ __('messages.contacts.form.title')}}</h2>
			<p class="contactForm-subtitle align-center">{{ __('messages.contacts.form.slogan')}}</p>

			@if (session()->has('message'))				
				<div class="success-message">{{ session()->get('message') }}</div>					
			@endif
			@if (count($errors) > 0)				
				<div class="error-message">
					@foreach ($errors->all() as $error)
						{{ $error }} <br/>
					@endforeach	
				</div>	
			@endif

			<form method="POST" action="/{{app()->getLocale()}}/sendEmail">
				@csrf
				<div class="grid">
					<div class="grid__item grid__item--md-span-6 grid__item--sm-span-12">
						<input class="form-control" type="text" name="name" placeholder="{{ __('messages.contacts.form.field.name')}} *" required>
					</div>	
					<div class="grid__item grid__item--md-span-6 grid__item--sm-span-12">
						<input class="form-control" type="email" name="email" placeholder="{{ __('messages.contacts.form.field.email')}} *" required>
					</div>
					<div class="grid__item grid__item-md--span-12">
						<textarea class="form-control" name="message" placeholder="{{ __('messages.contacts.form.field.description')}} *" required></textarea>
					</div>

					{{-- Recaptcha --}}
					<input type="hidden" name="recaptcha" id="recaptcha">

					<div class="grid__item grid__item-md--span-12 align-center">
						<input class="btn-static" type="submit" name="submeter" value="{{ __('messages.contacts.form.button')}}">
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
					<h5 class="contactDetails-info">carpintariahc@gmail.com</h5>
				</div>
			</div>

		</div>
	</div>
</div>

<div id="map">
	<iframe src="https://maps.google.com/maps?q=R.%20Ch%C3%A3o%20de%20Empires%2058&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
    
@stop


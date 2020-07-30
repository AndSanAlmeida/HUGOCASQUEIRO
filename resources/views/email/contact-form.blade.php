@component('mail::message')

# Carpintaria HC | Website

<strong>Name: </strong> {{ $data['name'] }} <br>
<strong>Email: </strong> {{ $data['email'] }} <br>

<strong>Mensagem </strong>

{{ $data['message'] }}

@endcomponent

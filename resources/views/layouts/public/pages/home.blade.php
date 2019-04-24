@extends('layouts.public.publicMaster') 

@section('title', 'Home')

@section('content')

<div class="style-1">
    <div class="container">
        <section id="about-us">
            <div class="grid">
                <div class="grid__item grid__item--lg-span-4 grid__item--md-span-12">
                    <h2>Sobre Nós</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="grid__item grid__item--lg-span-8 grid__item--md-span-12">
                    <img class="img_responsive" src="{!! asset('img/about_us.jpg') !!}" alt="about_us">
                </div>
            </div>
        </section>
    </div>
</div>

<div class="style-2">
    <div class="container">
        <section id="services">
            <div class="grid">
                <div class="grid__item grid__item--lg-span-4 grid__item--md-span-12"></div>
                <div class="grid__item grid__item--lg-span-8 grid__item--md-span-12"></div>
            </div>
        </section>
    </div>
</div>

@stop

@extends('layouts.public.publicMaster') 

@section('title', 'Portfólio')

@section('content')
    <div id="portfolio">
        <div class="parallax-portfolio" style="background-image: url('{!! asset('img/slide_01.jpg') !!}');">
            <div class="flexbox">
                <div class="flexbox_item">
                    <div class="grey-fade-over"></div>
                    <div class="container">
                        <h1>Portfólio</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


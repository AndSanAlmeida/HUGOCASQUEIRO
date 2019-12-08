@extends('layouts.dashboard.dashboard')
@section('title', __('messages.slides') )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>@lang('messages.title')</th>
                        <th>@lang('messages.image')</th>
                        <th>@lang('messages.actions')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $slider)
                        <tr>
                        <td>{{json_decode($slider->title)}}</td>
                        <td><img src="{{asset($slider->path)}}" alt="{{$slider->title}}" class="img-thumbnail w-25"></td>
                        <td><a class="btn btn-light" href="{{route('dashboard.slider-edit',['locale' => app()->getLocale(),'id' => $slider->id])}}">
                        <i class="far fa-edit"></i>
                        </a></td>
                        </tr>
                    @empty
                        <p>@lang('messages.no-slides-found')</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
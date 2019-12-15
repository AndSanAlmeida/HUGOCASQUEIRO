@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(__('messages.slides')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-slider', app()->getLocale())}}" class="btn btn-primary mb-3">{{ucfirst(trans('messages.new-slide'))}}</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                    <th>{{ucfirst(trans('messages.title'))}}</th>
                    <th>{{ ucfirst(trans('messages.image'))}}</th>
                    <th class="text-right">{{ucfirst(trans('messages.actions'))}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $slider)
                        <tr>
                        <td class="w-25 align-middle">{{json_decode($slider->title)}}</td>
                        <td class="w-50 align-middle"><img src="{{asset($slider->path)}}" alt="{{$slider->title}}" class="img-thumbnail w-25"></td>
                        <td align="right" class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="{{route('dashboard.slider-edit',['locale' => app()->getLocale(),'id' => $slider->id])}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('dashboard.slider-delete',['locale' => app()->getLocale(),'id' => $slider->id])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                            
                        </td>
                        </tr>
                    @empty
                    <p>{{ucfirst(trans('messages.no-slides-found'))}}</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
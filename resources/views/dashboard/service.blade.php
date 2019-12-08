@extends('layouts.dashboard.dashboard')
@section('title', __('messages.slides') )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-service', app()->getLocale())}}" class="btn btn-primary mb-3">@lang('messages.new-service')</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                        <th>@lang('messages.identifier')</th>
                        <th>@lang('messages.title')</th>
                        <th class="text-right">@lang('messages.actions')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $service)
                        <tr>
                            <td>{{json_decode($service->identifier)}}</td>
                        <td class="w-25">{{json_decode($service->title)}}</td>
                        <td align="right">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="{{route('dashboard.service-edit',['locale' => app()->getLocale(),'id' => $service->id])}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('dashboard.service-delete',['locale' => app()->getLocale(),'id' => $service->id])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                            
                        </td>
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
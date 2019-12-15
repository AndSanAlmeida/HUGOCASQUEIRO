@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(trans('messages.services')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-service', app()->getLocale())}}" class="btn btn-primary mb-3">{{ucfirst(trans('messages.new-service'))}}</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                        <th>{{ucfirst(trans('messages.identifier'))}}</th>
                        <th>{{ucfirst(trans('messages.title'))}}</th>
                        <th class="text-right">{{ucfirst(trans('messages.actions'))}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $service)
                        <tr>
                            <td class="align-middle">{{json_decode($service->identifier)}}</td>
                        <td class="w-25 align-middle">{{json_decode($service->title)}}</td>
                        <td class="align-middle" align="right">
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
                        <p>{{ucfirst(trans('messages.no-services-found'))}}</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
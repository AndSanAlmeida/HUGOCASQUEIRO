@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(__('messages.categories')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-category', app()->getLocale())}}" class="btn btn-primary mb-3">{{ucfirst(trans('messages.new-category'))}}</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                    <th>{{ucfirst(trans('messages.name'))}}</th>
                    <th>{{ ucfirst(trans('messages.filter'))}}</th>
                    <th class="text-right">{{ucfirst(trans('messages.actions'))}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $category)
                        <tr>
                        <td class="w-25 align-middle">{{json_decode($category->name)}}</td>
                        <td class="w-50 align-middle">{{$category->filter}}</td>
                        <td align="right" class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="{{route('dashboard.category-edit',['locale' => app()->getLocale(),'id' => $category->id])}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('dashboard.category-delete',['locale' => app()->getLocale(),'id' => $category->id])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                            
                        </td>
                        </tr>
                    @empty
                    <p>{{ucfirst(trans('messages.no-categories-found'))}}</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
@extends('layouts.dashboard.dashboard')
@section('title', ucfirst(__('messages.projects')) )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-project', app()->getLocale())}}" class="btn btn-primary mb-3">{{ucfirst(trans('messages.new-project'))}}</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                    <th>{{ucfirst(trans('messages.title'))}}</th>
                    <th>{{ucfirst(trans('messages.category'))}}</th>
                    <th>{{ ucfirst(trans('messages.family'))}}</th>
                    <th>{{ ucfirst(trans('messages.main_photo'))}}</th>
                    <th class="text-right">{{ucfirst(trans('messages.actions'))}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $project)
                        <tr>
                        <td class="w-25 align-middle">{{json_decode($project->title)}}</td>
                        <td class="w-25 align-middle">{{json_decode($project->category->name)}}</td>
                        <td class="w-25 align-middle">{{json_decode($project->family)}}</td>
                        <td class="w-50 align-middle"><img src="{{asset($project->main_photo)}}" alt="{{json_decode($project->title)}}" class="img-thumbnail w-25"></td>
                        <td align="right" class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="{{route('dashboard.project-edit',['locale' => app()->getLocale(),'id' => $project->id])}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('dashboard.project-delete',['locale' => app()->getLocale(),'id' => $project->id])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                            
                        </td>
                        </tr>
                    @empty
                    <p>{{ucfirst(trans('messages.no-projects-found'))}}</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
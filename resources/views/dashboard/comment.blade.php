@extends('layouts.dashboard.dashboard')
@section('title', __('messages.comments') )
@section('content')
<main class="main">
    <div class="container-fluid mt-5">
    <a href="{{route('dashboard.new-comment', app()->getLocale())}}" class="btn btn-primary mb-3">@lang('messages.new-comment')</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                        <th>@lang('messages.title')</th>
                        <th>@lang('messages.image')</th>
                        <th>@lang('messages.actions')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $comment)
                        <tr>
                        <td class="w-25">{{$comment->name}}</td>
                        <td><img src="{{asset($comment->photo)}}" alt="{{$comment->name}}" class="img-thumbnail w-25"></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="{{route('dashboard.comment-edit',['locale' => app()->getLocale(),'id' => $comment->id])}}">
                                <i class="far fa-edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{route('dashboard.comment-delete',['locale' => app()->getLocale(),'id' => $comment->id])}}">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                            
                        </td>
                        </tr>
                    @empty
                        <p>@lang('messages.no-comments-found')</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>    
    </div>
</main>
@endsection
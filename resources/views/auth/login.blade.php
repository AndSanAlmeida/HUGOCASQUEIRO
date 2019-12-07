@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card-group">
            <div class="card p-4">
               <div class="card-body">
                   <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="fas fa-user"></i>
                        </span>
                     </div>
                     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="fas fa-lock"></i>
                        </span>
                     </div>
                     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                     </div>
                     
                  </div>
                   </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

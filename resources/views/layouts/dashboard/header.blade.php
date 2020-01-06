<header class="app-header navbar">
   <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
   <span class="navbar-toggler-icon"></span>
   </button>
<a class="navbar-brand" href="{{route('dashboard.sliders',app()->getLocale())}}">
   Hugo Casqueiro
   </a>
   <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
   <span class="navbar-toggler-icon"></span>
   </button>
   <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown mr-3">
         <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
             @lang('messages.header.greeting'), {{Auth::user()->name}}
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
               <strong>@lang('messages.header.user.settings')</strong>
            </div>
         <a class="dropdown-item" href="{{route('home',app()->getLocale())}}" target="_blank">
            <i class="fa fa-user"></i> @lang('messages.header.user.home')</a>
         <a class="dropdown-item" href="{{url('logout')}}">
            <i class="fa fa-lock"></i> @lang('messages.header.user.logout')</a>
         </div>
      </li>
   </ul>
   
</header>
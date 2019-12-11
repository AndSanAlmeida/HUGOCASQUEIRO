<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">

            <li class="nav-title">@lang('messages.sidebar.operations')</li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.sliders', app()->getlocale())}}">
                    <i class="nav-icon icon-drop"></i> @lang('messages.sidebar.main-slider')</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.mission', app()->getlocale())}}">
                    <i class="nav-icon icon-pencil"></i> @lang('messages.sidebar.our-mission')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.services', app()->getlocale())}}">
                    <i class="nav-icon icon-drop"></i> @lang('messages.sidebar.services')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.comments', app()->getlocale())}}">
                    <i class="nav-icon icon-drop"></i> @lang('messages.sidebar.comments')</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.about', app()->getlocale())}}">
                    <i class="nav-icon icon-drop"></i> @lang('messages.sidebar.about-us')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="colors.html">
                    <i class="nav-icon icon-drop"></i> @lang('messages.sidebar.portfolio')</a>
            </li>
        </ul>
</div>
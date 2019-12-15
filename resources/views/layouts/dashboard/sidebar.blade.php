<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">

            <li class="nav-title">@lang('messages.sidebar.operations')</li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.sliders', app()->getlocale())}}">
                    <i class="far fa-images"></i> @lang('messages.sidebar.main-slider')</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.mission', app()->getlocale())}}">
                    <i class="far fa-gem"></i> @lang('messages.sidebar.our-mission')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.services', app()->getlocale())}}">
                    <i class="far fa-clone"></i> @lang('messages.sidebar.services')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.comments', app()->getlocale())}}">
                    <i class="far fa-comments"></i> @lang('messages.sidebar.comments')</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.about', app()->getlocale())}}">
                    <i class="far fa-address-card"></i> @lang('messages.sidebar.about-us')</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="far fa-handshake"></i> @lang('messages.sidebar.portfolio')</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="icons/coreui-icons.html">
                            <i class="far fa-bookmark"></i> @lang('messages.sidebar.portfolio-categories')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons/flags.html">
                            <i class="far fa-folder-open"></i> @lang('messages.sidebar.portfolio-projects')</a>
                    </li>
                </ul>
            </li>
        </ul>
</div>
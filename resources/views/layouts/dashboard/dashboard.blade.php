@include('layouts.dashboard.partials._head')
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('sweetalert::alert')
    @include('layouts.dashboard.header')
    <div class="app-body">
        @include('layouts.dashboard.sidebar')
        @yield('content')
    </div>
    
</body>
@include('layouts.dashboard.partials._footer')

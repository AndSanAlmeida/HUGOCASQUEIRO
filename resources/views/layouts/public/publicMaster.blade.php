 @include('layouts.public.partials._head')
<body>
    @include('layouts.public.includes.header')
    @yield('content')
    @include('layouts.public.includes.footer')
    <!-- MASK -->
    <!--<div id="side-nav-mask"></div>-->
</body>
@include('layouts.public.partials._footer')
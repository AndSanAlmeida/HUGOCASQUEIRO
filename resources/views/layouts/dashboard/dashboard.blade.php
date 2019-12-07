<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app_name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.dashboard.header')
    <div class="app-body">
        @include('layouts.dashboard.sidebar')
        @yield('content')
    </div>
    <script src="{{ asset('js/auth.js') }}" defer></script>
</body>
</html>

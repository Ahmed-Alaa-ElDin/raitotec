<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logos/r-logo.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/logos/r-logo.png') }}" />

    <title>{{ isset($title) ? $title . ' | ' : '' }}{{ __('Raitotec') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/tooltips.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />

    @livewireStyles
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('layouts.includes.sidebar', ['title' => isset($title) ? $title : 'Homepage'])
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('layouts.includes.navbar', ['title' => isset($title) ? $title : null])

        @yield('content')
    </main>
</body>

@livewireScripts


<!-- plugin for scrollbar  -->
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>

<!-- plugin for charts  -->
<script src="{{ asset('js/navbar-collapse.js') }}"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>
<script src="{{ asset('js/nav-pills.js') }}"></script>
<script src="{{ asset('js/dropdown.js') }}"></script>
<script src="{{ asset('js/fixed-plugin.js') }}"></script>
<script src="{{ asset('js/sidenav-burger.js') }}"></script>
<script src="{{ asset('js/navbar-sticky.js') }}"></script>

</html>

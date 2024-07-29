<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @yield('meta')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/modern.css') }}">

    @yield('style_css')

</head>

<body>

    <div class="wrapper">

        @include('superadmin.master.side')

        <div class="main">

            @include('superadmin.master.nav')

            @yield('content')

            @include('superadmin.master.footer')

        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer_js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>

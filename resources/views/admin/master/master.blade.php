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

    @include('adminstyle')

</head>

<body>

    <div class="wrapper">

        @include('admin.master.side')

        <div class="main">
            @include('admin.master.nav')
            @yield('content')

            @include('admin.master.footer')

        </div>

    </div>
    @include('adminfooter')
</body>

</html>

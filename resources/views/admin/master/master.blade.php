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

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/modern.css') }}">

    @yield('style_css')

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
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('footer_js')
    <script>
        $(document).ready(function() {
            // Check if DataTable is already initialized
            if (!$.fn.DataTable.isDataTable('#datatables-reponsive')) {
                $('#datatables-reponsive').DataTable({
                    responsive: true
                });
            }

            // SweetAlert confirmation for delete
            $('.delete-form').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.off('submit').submit(); // Proceed with form submission
                    }
                });
            });
        });
    </script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
    {{-- Css --}}
    @stack('css')
    {{-- tutup --}}
</head>

<body class="vertical  light rtl ">
    <div class="wrapper">
        @include('master.navbar.nav')

        @include('master.navbar.sidebar')
        <main role="main" class="main-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main> <!-- main -->
    </div> <!-- .wrapper -->

    {{-- Js --}}
    @stack('js')
    {{-- tutup --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src='{{ asset('js/daterangepicker.js') }}'></script>
    <script src='{{ asset('js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
</body>

</html>

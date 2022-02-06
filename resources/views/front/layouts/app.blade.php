<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href='{{ asset('front/css/newstyle.css') }}'>
    <link rel="shortcut icon" type="image/ico" href="{{ asset('front/images/NindoWebLogo.svg') }}">
    @yield('styles')
</head>
<body id="indexParent" class="d-flex flex-column mt-3">
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')
    <script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('front/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src='{{ asset('front/js/main.js') }}'></script>
    @yield('scripts')
</body>
</html>

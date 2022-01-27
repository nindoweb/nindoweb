<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

@include('front.layouts.styles')

</head>
<body id="indexParent" class="d-flex flex-column mt-3 container">
@include('front.layouts.header')
<main class="d-flex flex-column justify-content-between align-items-center">
    @yield('content')
</main>

@include('front.layouts.scripts')
@include('front.layouts.footer')
</body>
</html>
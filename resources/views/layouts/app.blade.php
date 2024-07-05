<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/favicon.ico">
    @include('includes.style')
</head>

<body class="antialiased">
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            @include('includes.header')
        </header>
        <!-- Header Area End Here -->

        <!-- Slider 1 Area Start Here -->
        {{-- <div class="slider1-area overlay-default">
            @yield('slider')
        </div> --}}
        <!-- Slider 1 Area End Here -->

        @yield('content')


        <!-- Footer Area Start Here -->
        <footer>
            @include('includes.footer')
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    @include('includes.script')
</body>

</html>

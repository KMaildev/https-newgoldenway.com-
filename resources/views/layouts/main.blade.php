<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="New Golden Way Co.,Ltd" />
    <meta name="keywords" content="New Golden Way Co.,Ltd" />
    <meta name="author" content="New Golden Way Co.,Ltd" />
    <link rel="icon" href="{{ asset('data/newgoldenway.png') }}" type="image/gif" sizes="20x20">
    <!-- Page Title -->
    <title>New Golden Way Co.,Ltd @yield('title')</title>
    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('assets/js/menuzord/css/menuzord.css') }}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- CSS | Theme Color -->
    <link href="{{ asset('assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/menuzord/js/menuzord.js') }}"></script>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/css/rs6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/extra-rev-slider1.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/extra-rev-slider1.js') }}"></script>

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Black Han Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Spice' rel='stylesheet'>

    <link href='https://fonts.googleapis.com/css?family=Noto Sans JP' rel='stylesheet'>
</head>

<body class="tm-container-1230px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="wrapper" class="clearfix">
        @include('layouts.includes.menu')

        <div class="main-content-area">
            @if (URL::current() == route('home') || URL::current() == route('welcome'))
                @include('layouts.includes.slider')
            @endif
            @yield('content')
        </div>

        @include('layouts.includes.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>

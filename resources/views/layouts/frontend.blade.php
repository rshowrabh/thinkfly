<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Immigration and Visa Consulting</title>
    <meta name="description" content="">
    <meta name="author" content="rshowrabh">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/imgs/logo/favicon.png') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=Sofia&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/animate.min.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/odometer.min.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/plugins/swiper.min.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/fontawesome-pro.css') }}> 
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/spacing.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/vendor/custom-font.css') }}>
    <link rel="stylesheet" href={{ URL::to('assets/css/main.css') }}>
    <link rel="stylesheet" href={{ URL::to('style.css') }}>
</head>


<body>
<!-- Backtotop start -->
<div class="backtotop-wrap cursor-pointer">
    <svg class="backtotop-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- Backtotop end -->

<!-- Offcanvas area start -->
@include('frontend.homepage.offcanvas')
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    @include('frontend.homepage.header') 
</header>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- Header area end -->

@yield('content')
<div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
<!-- Footer area start -->
@include('frontend.homepage.footer')

<!-- Footer area end -->

<!-- JS here -->
<script src={{ URL::to('assets/js/vendor/jquery-3.6.0.min.js') }}></script>
<script src={{ URL::to('assets/js/plugins/waypoints.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/bootstrap.bundle.min.js') }}></script>
<script src={{ URL::to('assets/js/plugins/meanmenu.min.js') }}></script>
<script src={{ URL::to('assets/js/plugins/swiper.min.js') }}></script>
<script src={{ URL::to('assets/js/plugins/wow.js') }}></script>
<script src={{ URL::to('assets/js/vendor/magnific-popup.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/type.js') }}></script>
<script src={{ URL::to('assets/js/vendor/vanilla-tilt.js') }}></script>
<script src={{ URL::to('assets/js/plugins/nice-select.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/odometer.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/jquery-ui.min.js') }}></script>
<script src={{ URL::to('assets/js/plugins/parallax-scroll.js') }}></script>
<script src={{ URL::to('assets/js/plugins/jquery.countdown.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/smooth-scroll.js') }}></script>
<script src={{ URL::to('assets/js/plugins/isotope-docs.min.js') }}></script>
<script src={{ URL::to('assets/js/vendor/ajax-form.js') }}></script>
<script src={{ URL::to('assets/js/main.js') }}></script>
@stack('head')

</body>

</html>
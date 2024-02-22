<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')

</head>

<body>
<!-- HEADER -->
<header>
    <!-- header -->
    @include('frontend.layouts.header')
    <!-- container -->
</header>
<!-- /HEADER -->

@include('frontend.layouts.sidebar')

@include('frontend.layouts.banner')

<!-- section -->
@yield('content')
<!-- /section -->
@include('frontend.layouts.footer')
<!-- jQuery Plugins -->
<script src="{{asset('frontendClient/js/jquery.min.js')}}"></script>
<script src="{{asset('frontendClient/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontendClient/js/slick.min.js')}}"></script>
<script src="{{asset('frontendClient/js/nouislider.min.js')}}"></script>
<script src="{{asset('frontendClient/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('frontendClient/js/main.js')}}"></script>

</body>

</html>

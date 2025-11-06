<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Stylesheet, Meta Tag, Title -->
    @include('frontend.includes.partials.head')
    @yield('css')
</head>
<main class="main">

    <body class="{{ $bodyClass ?? '' }}">
        <!-- Start Contenet Area-->
        @yield('content')
        <!-- End Contenet Area -->

        <!-- Start Script Area -->
        @include('frontend.includes.partials.scripts')
        @yield('script')
        <!-- End Script Area -->
    </body>

</main>

</html>

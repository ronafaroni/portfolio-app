<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Stylesheet, Meta Tag, Title -->
    @include('frontend.includes.partials.head')
    @yield('css')
</head>

<body class="{{ $bodyClass ?? '' }}">
    <main class="main">
        <!-- Start Content Area -->
        @yield('content')
        <!-- End Content Area -->
    </main>

    <!-- Start Script Area -->
    @include('frontend.includes.partials.scripts')
    @yield('script')
    <!-- End Script Area -->
</body>

</html>

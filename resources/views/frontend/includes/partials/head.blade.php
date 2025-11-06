<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title>Sintesa Digital Solution | @yield('title')</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" type="image/x-icon">

<!-- Flaticon -->
<link rel="stylesheet" href="{{ asset('/assets/css/flaticon.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-5.14.0.min.css') }}">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<!-- Nice Select -->
<link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css') }}">
<!-- Animate -->
<link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
<!-- Slick -->
<link rel="stylesheet" href="{{ asset('/assets/css/slick.min.css') }}">
<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

<style>
    .tools-slideshow {
        width: 100%;
        overflow: hidden;
    }

    .slider {
        display: flex;
        align-items: center;
    }

    .slide-track {
        display: flex;
        width: max-content;
        gap: 16px;
    }

    .item {
        flex: 0 0 25%;
    }

    .item img {
        width: 100%;
        border-radius: 10px;
        display: block;
    }

    /* ANIMASI TANPA PUTUS */
    .slider-right .slide-track {
        animation: scrollRight 20s linear infinite;
    }

    .slider-left .slide-track {
        animation: scrollLeft 20s linear infinite;
    }

    @keyframes scrollLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scrollRight {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    /* Saat hover, animasi berhenti */
    .slide-track:hover {
        animation-play-state: paused;
    }

    /* CSS untuk memberikan efek blur pada header saat scroll */
    .main-header.fixed-header .header-upper {
        /* Atur warna latar belakang dengan transparansi agar blur terlihat */
        background-color: rgba(40, 40, 40, 0.85);

        /* Efek blur */
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);

        /* Tambahkan bayangan untuk memberikan kedalaman */
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);

        /* Transisi agar perubahan terlihat mulus */
        transition: background-color 0.3s ease, backdrop-filter 0.3s ease, box-shadow 0.3s ease;
    }

    .main-header .header-upper {
        transition: background-color 0.3s ease;
    }
</style>

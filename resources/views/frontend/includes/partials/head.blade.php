<!-- ✅ BASIC META TAGS -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Rona Faroni — Fullstack Developer & Digital Product Engineer</title>
<meta name="description"
    content="I’m Rona Faroni — a passionate Fullstack Developer who turns complex problems into simple, functional, and elegant digital products. I specialize in building scalable web & mobile applications with clean code and great user experience.">

<meta name="keywords"
    content="Rona Faroni, Fullstack Developer, Web Developer, App Developer, Software Engineer, Laravel, NextJS, React, Mobile App, UI/UX, Programmer Indonesia">
<meta name="author" content="Rona Faroni">

<!-- ✅ CANONICAL (hindari duplikat SEO URL) -->
<link rel="canonical" href="https://ronafaronie.my.id">

<!-- ✅ OPEN GRAPH / SOCIAL SHARE -->
<meta property="og:title" content="Rona Faroni — Fullstack Developer & Digital Product Engineer">
<meta property="og:description"
    content="Building scalable and user-focused digital products with clean code, modern UI, and strong technical architecture.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://ronafaronie.my.id">
<meta property="og:image" content="https://ronafaronie.my.id/assets/images/preview.jpg">
<meta property="og:site_name" content="Rona Faroni">
<meta property="og:locale" content="ID">

<!-- ✅ TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Rona Faroni — Fullstack Developer">
<meta name="twitter:description" content="Transforming ideas into modern, scalable, and impactful digital products.">
<meta name="twitter:image" content="https://ronafaroni.my.id/assets/images/preview.jpg">
<meta name="twitter:creator" content="@ronafaroni">

<!-- Title -->
<title>@yield('title')</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{ asset('/assets/images/logos/favicon.webp') }}" type="image/x-icon">

<!-- Flaticon -->
<link rel="stylesheet" href="{{ asset('/assets/css/flaticon.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-5.14.0.min.css') }}" onload="this.media='all'">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" onload="this.media='all'">
<!-- Nice Select -->
<link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css') }}">
<!-- Animate -->
<link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
<!-- Slick -->
<link rel="stylesheet" href="{{ asset('/assets/css/slick.min.css') }}">
<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" onload="this.media='all'">

<!-- Preconnect to improve google font load -->
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
        background-color: rgba(40, 40, 40, 0.80);

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

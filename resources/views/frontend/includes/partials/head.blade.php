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
<meta property="og:image" content="https://ronafaronie.my.id/assets/images/about/aboutme-icon1.webp">
<meta property="og:site_name" content="Rona Faroni">
<meta property="og:locale" content="ID">
<meta property="profile:username" content="ronafachronie"> <!-- Instagram & Threads -->
<meta property="profile:first_name" content="Rona">
<meta property="profile:last_name" content="Faroni">
<meta property="og:see_also" content="https://www.linkedin.com/in/ronafaroni">
<meta property="og:see_also" content="https://www.facebook.com/rona.fachronie">
<meta property="og:see_also" content="https://github.com/ronafaroni">

<!-- ✅ TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Rona Faroni — Fullstack Developer">
<meta name="twitter:description" content="Transforming ideas into modern, scalable, and impactful digital products.">
<meta name="twitter:image" content="https://ronafaronie.my.id/assets/images/about/aboutme-icon1.webp">
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
        background-color: rgba(10, 10, 10, 0.9);
        /* Hitam lebih solid */
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(15px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.8);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        /* Garis halus di bawah */
        transition: all 0.4s ease;
    }

    /* Language Switcher Dropdown (Pure CSS) */
    .lang-switcher {
        position: relative;
        display: inline-block;
    }

    .lang-btn {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff !important;
        border-radius: 50px;
        padding: 8px 18px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    /* Icon panah kecil */
    .lang-btn::after {
        content: '\f107';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        margin-left: 5px;
        font-size: 12px;
        transition: transform 0.3s;
    }

    .lang-switcher:hover .lang-btn::after {
        transform: rotate(180deg);
    }

    .lang-switcher .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background: #1a1a1a;
        min-width: 150px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding: 8px 0;
        margin-top: 12px;
        z-index: 999;
        border: 1px solid rgba(255, 255, 255, 0.1);
        list-style: none;
    }

    /* Tampilkan saat hover di desktop atau saat diklik (via Bootstrap fallback) */
    .lang-switcher:hover .dropdown-menu {
        display: block;
    }

    .lang-switcher .dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        color: rgba(255, 255, 255, 0.8) !important;
        font-size: 14px;
        text-decoration: none !important;
        transition: 0.2s;
    }

    .lang-switcher .dropdown-item:hover {
        background: var(--primary-color) !important;
        color: #000 !important;
    }

    .lang-switcher .dropdown-item.active {
        color: var(--primary-color) !important;
        font-weight: 700;
    }

    .lang-switcher .dropdown-item {
        border-radius: 8px;
        padding: 10px 15px;
        color: rgba(255, 255, 255, 0.8) !important;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: 0.2s;
    }

    .lang-switcher .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: var(--primary-color) !important;
    }

    .lang-switcher .dropdown-item.active {
        background-color: var(--primary-color);
        color: #000 !important;
    }

    /* GLOBAL LOGO FIX - PRECISION SIZING */
    .logo-outer,
    .logo,
    .mobile-logo {
        padding: 0 !important;
        margin: 0 !important;
        display: flex;
        align-items: center;
    }

    .logo img,
    .mobile-logo img {
        width: auto !important;
        max-width: 130px !important;
        /* Slightly smaller for precision */
        max-height: 50px !important;
        /* Balanced height */
        object-fit: contain;
        display: block;
        transition: all 0.3s ease;
    }


    /* HEADER & NAVBAR PRECISION - PERFECT CENTERING */
    .header-inner {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        min-height: 75px;
        /* Reduced from 95px */
        padding: 0 30px;
        width: 100%;
    }

    .logo-outer {
        flex: 0 0 200px;
        /* Lebar tetap untuk penyeimbang kiri */
        display: flex;
        align-items: center;
    }

    .nav-outer {
        flex: 1;
        display: flex;
        justify-content: center !important;
        /* Force center */
        align-items: center;
        margin: 0 !important;
        /* Clear mx-auto conflict */
    }

    .lang-switcher {
        flex: 0 0 200px;
        /* Lebar tetap untuk penyeimbang kanan */
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }


    .main-menu .navigation>li>a {
        color: #fff !important;
        /* Bright white for better contrast */
        font-weight: 500;
        opacity: 0.85;
        transition: 0.3s;
    }

    .main-menu .navigation>li:hover>a,
    .main-menu .navigation>li.current>a {
        opacity: 1;
        color: var(--primary-color) !important;
    }


    /* LANGUAGE TOGGLE (ONE CLICK) STYLE */

    .lang-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 30px;
        color: white !important;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none !important;
        transition: all 0.3s ease;
    }

    .lang-btn:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: black !important;
    }

    .lang-btn img {
        width: 18px;
        height: auto;
        border-radius: 2px;
    }

    /* ✅ RESPONSIVE HEADER FIXES */
    @media (max-width: 991px) {
        .header-inner {
            display: flex !important;
            flex-direction: row !important;
            justify-content: space-between !important;
            align-items: center !important;
            height: 65px !important;
            /* Reduced from 70px */
            min-height: auto !important;
            padding: 0 15px !important;
            width: 100% !important;
        }

        /* Sembunyikan Logo Utama Desktop */
        .logo-outer {
            display: none !important;
        }

        /* Nav Outer sebagai wadah Logo Mobile & Toggle */
        .nav-outer {
            flex: 1 !important;
            display: flex !important;
            justify-content: flex-start !important;
            order: 1 !important;
            margin: 0 !important;
            width: auto !important;
        }

        .navbar-header {
            display: flex !important;
            align-items: center !important;
            width: 100% !important;
            justify-content: space-between !important;
        }

        .mobile-logo {
            display: flex !important;
            align-items: center !important;
        }

        .mobile-logo img {
            max-width: 100px !important;
            /* Precise size for mobile */
            height: auto !important;
            max-height: 35px !important;
        }

        /* Lang Switcher ditaruh di tengah/sebelum toggle */
        .lang-switcher {
            order: 2 !important;
            margin: 0 10px !important;
            flex: 0 0 auto !important;
        }

        .navbar-toggle {
            order: 3 !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
            width: 42px !important;
            height: 40px !important;
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 8px !important;
            padding: 0 !important;
            margin-right: 0 !important;
        }

        .navbar-toggle .icon-bar {
            width: 22px !important;
            height: 2px !important;
            background-color: #ffffff !important;
            display: block !important;
            margin: 3px 0 !important;
            transition: 0.3s !important;
        }

        .lang-btn {
            padding: 5px 10px !important;
            font-size: 11px !important;
            height: 34px !important;
        }
    }

    @media (max-width: 480px) {
        .mobile-logo img {
            max-width: 85px !important;
            /* Even more precise for small phones */
        }

        .header-inner {
            height: 55px !important;
            /* Reduced from 60px */
        }

        .lang-switcher {
            margin: 0 5px !important;
        }
    }

    /* CLEAN BUTTON STYLE - SOLID COLOR TRANSITION (NO GLOW) */
    .theme-btn,
    a.theme-btn,
    .lang-btn {
        background: transparent !important;
        border: 2px solid var(--primary-color) !important;
        color: #fff !important;
        border-radius: 12px !important;
        transition: all 0.3s ease !important;
        font-weight: 600 !important;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .theme-btn:hover,
    a.theme-btn:hover,
    .lang-btn:hover,
    .lang-btn[aria-expanded="true"] {
        background: var(--primary-color) !important;
        color: #000 !important;
        /* Teks hitam agar sangat jelas di atas hijau */
        border-color: var(--primary-color) !important;
        box-shadow: none !important;
        /* Hilangkan efek bersinar */
        transform: translateY(-2px);
    }

    /* DROPDOWN MENU VISIBILITY FIX */
    .lang-switcher .dropdown-menu {
        background: #1a1a1a !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        padding: 8px !important;
        min-width: 160px !important;
    }

    .lang-switcher .dropdown-item {
        color: rgba(255, 255, 255, 0.7) !important;
        /* Warna default abu-abu terang */
        background: transparent !important;
        padding: 10px 15px !important;
        font-weight: 500 !important;
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        transition: 0.2s !important;
        border-radius: 6px !important;
    }

    .lang-switcher .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.05) !important;
        color: var(--primary-color) !important;
    }

    /* Penanda Bahasa yang Sedang Aktif */
    .lang-switcher .dropdown-item.active {
        background: var(--primary-color) !important;
        color: #000 !important;
        /* Teks hitam agar kontras dengan hijau aktif */
        font-weight: 700 !important;
    }

    .theme-btn:hover i,
    a.theme-btn:hover i {
        color: #000 !important;
        transform: translateX(5px);
    }

    .lang-btn {
        position: relative;
    }

    .lang-btn:after {
        content: "\f107";
        /* FontAwesome Angle Down */
        font-family: "Font Awesome 5 Pro";
        font-weight: 900;
        margin-left: 8px;
        font-size: 11px;
        color: var(--primary-color);
        transition: all 0.3s ease;
        display: inline-block;
    }

    .lang-btn:hover:after,
    .lang-btn[aria-expanded="true"]:after {
        animation: miniBounce 1s infinite alternate;
        color: #000;
    }

    @keyframes miniBounce {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(4px);
        }
    }
</style>
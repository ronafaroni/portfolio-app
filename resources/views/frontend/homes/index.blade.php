@extends('frontend.layouts.app')
@section('title', __('messages.page_title'))
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.header')
    <!-- header area end -->

    <!-- Hero Section Start -->
    <section id="home" class="main-hero-area pt-90 pb-80 rel z-1">
        <div class="container container-1620">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                        <span class="hero-subtitle d-block mb-2 fs-5 fw-semibold" style="color: #a0a0a0 !important;">{{ __('messages.hero_iam') }}</span>
                        <h1><b>Rona Faroni</b></h1>
                        <h2 class="hero-job-title" style="font-size: 22px !important; font-weight: 500; color: var(--primary-color) !important; margin-top: 4px; margin-bottom: 12px;">{{ __('messages.hero_job') }}</h2>
                        <p>{{ __('messages.hero_desc') }}</p>

                        <div class="hero-btns d-flex align-items-center flex-wrap gap-3 mt-30">
                            <a href="https://wa.me/6285226118681?text={{ urlencode(__('messages.wa_message')) }}"
                                target="_blank" rel="noopener noreferrer" class="theme-btn theme-btn-solid">
                                <span>{{ __('messages.hire_me') }}</span>
                                <i class="fas fa-paper-plane ms-2"></i>
                            </a>

                            <a href="{{ route('download') }}"
                                class="theme-btn theme-btn-line">
                                <span>{{ __('messages.download_cv') }}</span>
                                <i class="far fa-arrow-down-to-line ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow fadeIn delay-0-3s hero-image-wrapper">
                        <img src="{{ asset('/assets/images/hero/founder.webp') }}" alt="{{ __('messages.alt_author') }}" fetchpriority="high" width="415" height="441">
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>

        <!-- Client Marquee inside Hero (Aligned with Header Container) -->
        <div class="client-marquee-wrapper pt-25 pb-20 mt-10 wow fadeInUp delay-0-2s">
            <div class="container">
                <div class="marquee-title-box mb-10 text-center">
                    <span class="marquee-sub-title d-inline-block text-center text-white" style="color: #ffffff !important;">{{ __('messages.trusted_by') }}</span>
                </div>
                <div class="client-marquee-container" style="padding: 5px 0 5px;">
                    <div class="client-marquee-track">
                        <!-- Set 1 (10 Client Logos) -->
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/bumikartini.webp') }}" class="logo-wide-lg" alt="{{ __('messages.alt_client') }}" loading="lazy" width="175" height="39">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/techdor.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/sigawai.webp') }}" class="logo-sigawai" alt="{{ __('messages.alt_client') }}" loading="lazy" width="143" height="44">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/spmb.webp') }}" class="logo-wide-lg" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="52">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/bungacoklat.webp') }}" class="logo-boost" alt="{{ __('messages.alt_client') }}" loading="lazy" width="190" height="37">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/lakoo.webp') }}" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="42">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/openflow.webp') }}" class="logo-boost" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="42">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/webelio.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/awshara.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/webstore.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>

                        <!-- Set 2 (Duplicated for Seamless Infinite Loop) -->
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/bumikartini.webp') }}" class="logo-wide-lg" alt="{{ __('messages.alt_client') }}" loading="lazy" width="175" height="39">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/techdor.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/sigawai.webp') }}" class="logo-sigawai" alt="{{ __('messages.alt_client') }}" loading="lazy" width="143" height="44">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/spmb.webp') }}" class="logo-wide-lg" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="52">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/bungacoklat.webp') }}" class="logo-boost" alt="{{ __('messages.alt_client') }}" loading="lazy" width="190" height="37">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/lakoo.webp') }}" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="42">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/openflow.webp') }}" class="logo-boost" alt="{{ __('messages.alt_client') }}" loading="lazy" width="150" height="42">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/webelio.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/awshara.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                        <div class="client-marquee-item">
                            <img src="{{ asset('/assets/images/client-logos/webstore.webp') }}" class="logo-wide-md" alt="{{ __('messages.alt_client') }}" loading="lazy" width="160" height="45">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Area start -->
    <section id="about" class="about-area rel z-1">
        <div class="for-bgc-black pt-80 rpt-60 pb-70 rpb-50">
            <div class="container">
                <div class="row gap-120 align-items-center">
                    <div class="col-lg-7">
                        <div class="about-content-part rel z-2 rmb-55">
                            <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">{{ __('messages.about_subtitle') }}</span>
                                <h2>{!! __('messages.about_title') !!}</h2>
                                <p>{{ __('messages.about_desc') }}</p>
                            </div>
                            <div class="about-info-box mt-35 wow fadeInUp delay-0-2s">
                                <div class="info-box-item">
                                    <i class="far fa-map-marker-alt"></i>
                                    <div class="content">
                                        <span>{{ __('messages.location_label') }}</span><br>
                                        <a href="https://maps.google.com/?q=Jepara,+Indonesia" target="_blank" rel="noopener noreferrer">
                                            {{ __('messages.location_val') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="info-box-item">
                                    <i class="far fa-phone"></i>
                                    <div class="content">
                                        <span>{{ __('messages.make_call') }}</span><br>
                                        <a href="https://wa.me/6285226118681?text={{ urlencode(__('messages.wa_message')) }}"
                                            target="_blank" rel="noopener noreferrer">
                                            085226118681
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-part wow fadeInUp delay-0-3s" style="max-width: 380px; margin: 0 auto; padding-left: 0;">
                            <img src="{{ asset('/assets/images/about/aboutme.webp') }}" alt="{{ __('messages.about_subtitle') }}" loading="lazy" width="380" height="458" style="max-width: 100%; height: auto; border-radius: 20px;">
                            <div class="experience-glass-badge wow fadeInRight delay-0-5s">
                                <div class="exp-icon"><i class="fas fa-laptop-code"></i></div>
                                <div class="exp-text">
                                    <span class="h4 d-block m-0 text-white fw-bold">{{ __('messages.badge_exp_years') }}</span>
                                    <p>{{ __('messages.badge_exp_title') }}</p>
                                </div>
                            </div>
                            <div class="dot-shape">
                                <img src="{{ asset('/assets/images/shape/shape.webp') }}" width="30px" alt="{{ __('messages.alt_shape') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- About Area end -->

    <!-- Resume Area start -->
    <section id="resume" class="resume-area pt-80 rpt-60 pb-70 rpb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">{{ __('messages.resume') }}</span>
                        <h2>{!! __('messages.what_i_do_title') !!}</h2>
                        <p>{{ __('messages.what_i_do_desc') }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Work Experience Column -->
                <div class="col-lg-6 wow fadeInUp delay-0-2s">
                    <div class="timeline-header-minimal mb-35">
                        <h3><i class="far fa-briefcase text-primary me-2"></i> {{ __('messages.experience_title') }}</h3>
                    </div>
                    <div class="timeline-minimal-list">
                        <!-- Item 1 -->
                        <div class="timeline-minimal-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-meta mb-2">
                                <span class="timeline-period">{{ __('messages.exp_1_years') }}</span>
                                <span class="timeline-org">{{ __('messages.exp_1_company') }}</span>
                            </div>
                            <h4 class="timeline-role">{{ __('messages.exp_1_role') }}</h4>
                            <p class="timeline-desc">{{ __('messages.exp_1_desc') }}</p>
                        </div>
                        <!-- Item 2 -->
                        <div class="timeline-minimal-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-meta mb-2">
                                <span class="timeline-period">{{ __('messages.exp_2_years') }}</span>
                                <span class="timeline-org">{{ __('messages.exp_2_company') }}</span>
                            </div>
                            <h4 class="timeline-role">{{ __('messages.exp_2_role') }}</h4>
                            <p class="timeline-desc">{{ __('messages.exp_2_desc') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Education & Certifications Column -->
                <div class="col-lg-6 wow fadeInUp delay-0-4s">
                    <div class="timeline-header-minimal mb-35">
                        <h3><i class="far fa-graduation-cap text-primary me-2"></i> {{ __('messages.education_title') }}</h3>
                    </div>
                    <div class="timeline-minimal-list">
                        <!-- Education -->
                        <div class="timeline-minimal-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-meta mb-2">
                                <span class="timeline-period">{{ __('messages.edu_1_years') }}</span>
                                <span class="timeline-org">{{ __('messages.edu_1_institution') }}</span>
                            </div>
                            <h4 class="timeline-role">{{ __('messages.edu_1_degree') }}</h4>
                            <p class="timeline-desc">{{ __('messages.edu_1_desc') }}</p>
                        </div>
                        <!-- Certificate 1 -->
                        <div class="timeline-minimal-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-meta mb-2">
                                <span class="timeline-period">{{ __('messages.edu_2_years') }}</span>
                                <span class="timeline-org">{{ __('messages.edu_2_institution') }}</span>
                            </div>
                            <h4 class="timeline-role">{{ __('messages.edu_2_degree') }}</h4>
                            <p class="timeline-desc">{{ __('messages.edu_2_desc') }}</p>
                        </div>
                        <!-- Certificate 2 -->
                        <div class="timeline-minimal-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-meta mb-2">
                                <span class="timeline-period">{{ __('messages.edu_3_years') }}</span>
                                <span class="timeline-org">{{ __('messages.edu_3_institution') }}</span>
                            </div>
                            <h4 class="timeline-role">{{ __('messages.edu_3_degree') }}</h4>
                            <p class="timeline-desc">{{ __('messages.edu_3_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Resume Area end -->

    <!-- Services Area start -->
    <section id="services" class="services-area pt-80 rpt-60 pb-70 rpb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">{{ __('messages.featured_services') }}</span>
                        <h2>{!! __('messages.my_special_services') !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-2s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <span class="service-number-badge">01</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_1_title') }}</h3>
                            <p>{{ __('messages.service_1_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-3s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <span class="service-number-badge">02</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_2_title') }}</h3>
                            <p>{{ __('messages.service_2_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-4s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-plug"></i>
                            </div>
                            <span class="service-number-badge">03</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_3_title') }}</h3>
                            <p>{{ __('messages.service_3_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-2s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <span class="service-number-badge">04</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_4_title') }}</h3>
                            <p>{{ __('messages.service_4_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-3s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-database"></i>
                            </div>
                            <span class="service-number-badge">05</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_5_title') }}</h3>
                            <p>{{ __('messages.service_5_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="service-card-modern wow fadeInUp delay-0-4s">
                        <div class="service-card-top d-flex align-items-center justify-content-between mb-25">
                            <div class="service-icon-box">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <span class="service-number-badge">06</span>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ __('messages.service_6_title') }}</h3>
                            <p>{{ __('messages.service_6_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Services Area end -->

    <!-- Skill Area start -->
    <section id="skills" class="skill-area rel z-1">
        <div class="for-bgc-black pt-80 rpt-60 pb-70 rpb-50">
            <div class="container">
                <div class="row gap-100">
                    <div class="col-lg-5">
                        <div class="skill-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">{{ __('messages.my_skills') }}</span>
                                <h2>{!! __('messages.skills_title') !!}</h2>
                                <p>{{ __('messages.skills_desc') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="skill-items-wrap wow fadeInUp delay-0-2s">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/laravel.webp') }}" width="60" height="60"
                                                alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Laravel</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/midtrans.webp') }}" width="60" height="60"
                                                alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Midtrans</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/tailwind.webp') }}" width="60" height="60"
                                                alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Tailwind</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/javascript.webp') }}" width="60" height="60"
                                                alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Javascript</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/vuejs.webp') }}" width="60" height="60" alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Vue.js</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/react.webp') }}" width="60" height="60" alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">React</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/nextjs.webp') }}" width="60" height="60" alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">Next.js</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('/assets/images/skills/github.webp') }}" width="60" height="60" alt="{{ __('messages.alt_skill') }}" loading="lazy">
                                        </div>
                                        <span class="skill-name">GitHub</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Skill Area end -->

    <!-- Projects Area start -->
    <section id="portfolio" class="projects-area pt-80 rpt-60 pb-70 rpb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                        <span class="sub-title mb-15">{{ __('messages.latest_works') }}</span>
                        <h2>{!! __('messages.explore_projects') !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp delay-0-2s">
                    <div class="swiper project-swiper">
                        <div class="swiper-wrapper">
                            <!-- Project 1 -->
                            <div class="swiper-slide">
                                <div class="project-card-modern">
                                    <div class="image rel">
                                        <span class="project-category-badge">{{ __('messages.proj_1_cat') }}</span>
                                        <img src="{{ asset('/assets/images/projects/project-1.webp') }}" alt="{{ __('messages.proj_1_title') }}" loading="lazy">
                                    </div>
                                    <div class="project-card-content px-3 py-3">
                                        <div class="project-tech-tags mb-10">
                                            <span class="tech-tag">Laravel</span>
                                            <span class="tech-tag">MySQL</span>
                                            <span class="tech-tag">Bootstrap</span>
                                        </div>
                                        <h3 class="project-title mb-1"><b>{{ __('messages.proj_1_title') }}</b></h3>
                                        <p class="text-muted text-small mb-0">{{ __('messages.proj_1_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Project 2 -->
                            <div class="swiper-slide">
                                <div class="project-card-modern">
                                    <div class="image rel">
                                        <span class="project-category-badge">{{ __('messages.proj_2_cat') }}</span>
                                        <img src="{{ asset('/assets/images/projects/project-2.webp') }}" alt="{{ __('messages.proj_2_title') }}" loading="lazy">
                                    </div>
                                    <div class="project-card-content px-3 py-3">
                                        <div class="project-tech-tags mb-10">
                                            <span class="tech-tag">Tailwind CSS</span>
                                            <span class="tech-tag">Chart.js</span>
                                            <span class="tech-tag">JavaScript</span>
                                        </div>
                                        <h3 class="project-title mb-1"><b>{{ __('messages.proj_2_title') }}</b></h3>
                                        <p class="text-muted text-small mb-0">{{ __('messages.proj_2_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Project 3 -->
                            <div class="swiper-slide">
                                <div class="project-card-modern">
                                    <div class="image rel">
                                        <span class="project-category-badge">{{ __('messages.proj_3_cat') }}</span>
                                        <img src="{{ asset('/assets/images/projects/project-3.webp') }}" alt="{{ __('messages.proj_3_title') }}" loading="lazy">
                                    </div>
                                    <div class="project-card-content px-3 py-3">
                                        <div class="project-tech-tags mb-10">
                                            <span class="tech-tag">Laravel</span>
                                            <span class="tech-tag">REST API</span>
                                            <span class="tech-tag">MySQL</span>
                                        </div>
                                        <h3 class="project-title mb-1"><b>{{ __('messages.proj_3_title') }}</b></h3>
                                        <p class="text-muted text-small mb-0">{{ __('messages.proj_3_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Project 4 -->
                            <div class="swiper-slide">
                                <div class="project-card-modern">
                                    <div class="image rel">
                                        <span class="project-category-badge">{{ __('messages.proj_4_cat') }}</span>
                                        <img src="{{ asset('/assets/images/projects/project-4.webp') }}" alt="{{ __('messages.proj_4_title') }}" loading="lazy">
                                    </div>
                                    <div class="project-card-content px-3 py-3">
                                        <div class="project-tech-tags mb-10">
                                            <span class="tech-tag">Laravel</span>
                                            <span class="tech-tag">Midtrans</span>
                                            <span class="tech-tag">Tailwind</span>
                                        </div>
                                        <h3 class="project-title mb-1"><b>{{ __('messages.proj_4_title') }}</b></h3>
                                        <p class="text-muted text-small mb-0">{{ __('messages.proj_4_desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Pagination -->
                        <div class="swiper-pagination project-swiper-pagination mt-40"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Projects Area end -->


    <!-- FAQs Area start -->
    <section id="faqs" class="faqs-area pt-80 rpt-60 pb-70 rpb-50 rel z-1 wow fadeIn delay-0-1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-single-image-wrap rmb-55">
                        <div class="faq-single-image-card">
                            <img src="{{ asset('/assets/images/about/cta1.webp') }}" alt="{{ __('messages.alt_faq') }}" loading="lazy" width="478" height="512">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content-part rel z-2">
                        <div class="section-title mb-40">
                            <h2>{!! __('messages.faq_title') !!}</h2>
                        </div>
                        <div class="accordion" id="faq-accordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false">
                                        {{ __('messages.q1') }}
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a1') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false">
                                        {{ __('messages.q2') }}
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a2') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        {{ __('messages.q3') }}
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a3') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        {{ __('messages.q4') }}
                                    </button>
                                </h3>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a4') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        {{ __('messages.q5') }}
                                    </button>
                                </h3>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a5') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- FAQs Area end -->


    <!-- Contact Area start -->
    <section id="contact" class="contact-area pt-80 rpt-60 pb-70 rpb-50 rel z-1 wow fadeIn delay-0-1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-content-part pt-0 rmb-55">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">{{ __('messages.contact_subtitle') }}</span>
                            <h2>{!! __('messages.contact_title') !!}</h2>
                            <p>{{ __('messages.contact_desc') }}</p>
                        </div>
                        <ul class="list-style-two">
                            <li>{{ __('messages.exp_years') }}</li>
                            <li>{{ __('messages.hero_job') }}</li>
                            <li>{{ __('messages.special_sol') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form contact-form-wrap form-style-one">
                        <form id="contactForm" class="contactForm" onsubmit="sendToWhatsApp(event)">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">{{ __('messages.full_name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('messages.name_placeholder') }}" required>
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">{{ __('messages.phone_number') }}</label>
                                        <input type="number" id="phone_number" name="phone_number" class="form-control"
                                            placeholder="{{ __('messages.phone_placeholder') }}" required>
                                        <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">{{ __('messages.message_label') }}</label>
                                        <textarea name="message" id="message" class="form-control" rows="5"
                                            placeholder="{{ __('messages.message_placeholder') }}" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">
                                            {{ __('messages.send_message') }} <i class="far fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- Contact Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footer')
    <!-- footer area end -->

    <!-- Swiper and Modal CSS -->
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .mt-40 {
            margin-top: 40px;
        }

        /* Hero Buttons Alignment & Distinct Styles (Full Solid vs Line Outline) */
        .hero-btns {
            display: flex !important;
            align-items: center !important;
            flex-wrap: wrap !important;
            gap: 15px !important;
            margin-top: 30px !important;
        }

        .hero-btns .theme-btn {
            margin: 0 !important;
            height: 48px !important;
            padding: 0 28px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 12px !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        }

        /* 1. Full Solid Color Button (High Contrast: Dark Text on Primary Teal) */
        .theme-btn.theme-btn-solid,
        a.theme-btn.theme-btn-solid {
            background: var(--primary-color) !important;
            border: 1.5px solid var(--primary-color) !important;
            color: #000000 !important;
            font-weight: 700 !important;
            box-shadow: 0 4px 14px rgba(6, 146, 140, 0.35) !important;
        }

        .theme-btn.theme-btn-solid i,
        a.theme-btn.theme-btn-solid i,
        .theme-btn.theme-btn-solid span,
        a.theme-btn.theme-btn-solid span {
            color: #000000 !important;
            font-weight: 700 !important;
            transition: transform 0.3s ease !important;
        }

        .theme-btn.theme-btn-solid:hover,
        a.theme-btn.theme-btn-solid:hover {
            background: #07c7bf !important;
            border-color: #07c7bf !important;
            color: #000000 !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(6, 146, 140, 0.5) !important;
        }

        .theme-btn.theme-btn-solid:hover i,
        a.theme-btn.theme-btn-solid:hover i {
            transform: translateX(3px) !important;
        }

        /* High Contrast Sub-Titles and Muted Text */
        .sub-title,
        .section-title .sub-title,
        .marquee-sub-title {
            color: var(--primary-color) !important;
            font-weight: 600 !important;
        }

        .text-muted {
            color: rgba(255, 255, 255, 0.82) !important;
        }

        /* 2. Line / Outline Button with Themed Icon */
        .theme-btn.theme-btn-line,
        a.theme-btn.theme-btn-line {
            background: transparent !important;
            border: 1.5px solid var(--primary-color) !important;
            color: #ffffff !important;
            box-shadow: none !important;
        }

        .theme-btn.theme-btn-line i,
        a.theme-btn.theme-btn-line i {
            color: var(--primary-color) !important;
            transition: all 0.3s ease !important;
        }

        .theme-btn.theme-btn-line:hover,
        a.theme-btn.theme-btn-line:hover {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            color: #ffffff !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(6, 146, 140, 0.35) !important;
        }

        .theme-btn.theme-btn-line:hover i,
        a.theme-btn.theme-btn-line:hover i {
            color: #ffffff !important;
            transform: translateY(2px) !important;
        }

        /* Color Override & Icon Theme Harmony */
        .text-primary,
        .timeline-column-header h4 i {
            color: var(--primary-color) !important;
        }

        /* Contact Section Form Balance */
        .contact-form-wrap {
            max-width: 620px;
            margin-left: auto;
            border-radius: 20px;
            padding: 35px 35px 25px;
            background: #141414;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        /* About Info Box (Kiri-Kanan & White Icons) */
        .about-info-box {
            display: flex !important;
            flex-wrap: wrap !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 20px !important;
            max-width: 600px !important;
            border-radius: 20px !important;
            padding: 18px 28px !important;
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
        }

        .about-info-box .info-box-item {
            display: flex !important;
            align-items: center !important;
            margin: 0 !important;
            flex: 1 1 220px !important;
        }

        .about-info-box .info-box-item > i {
            margin-right: 15px !important;
            color: #ffffff !important;
            background: var(--primary-color) !important;
            width: 44px !important;
            height: 44px !important;
            line-height: 44px !important;
            font-size: 16px !important;
            border-radius: 50% !important;
            text-align: center !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            flex-shrink: 0 !important;
            box-shadow: none !important;
        }

        .about-info-box .info-box-item .content span {
            font-size: 13px !important;
            color: rgba(255, 255, 255, 0.6) !important;
            font-weight: 500 !important;
        }

        .about-info-box .info-box-item .content a {
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #ffffff !important;
            transition: 0.3s !important;
        }

        .about-info-box .info-box-item .content a:hover {
            color: var(--primary-color) !important;
        }

        /* Clean Modern Footer Styling */
        .footer-two {
            background-color: #0c0c0c !important;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
        }

        .footer-logo img {
            transition: transform 0.3s ease;
        }

        .footer-logo img:hover {
            transform: scale(1.05);
        }

        .footer-contact-brand h5 {
            font-size: 17px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .footer-contact-link {
            color: rgba(255, 255, 255, 0.65) !important;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-contact-link:hover {
            color: var(--primary-color) !important;
        }

        .footer-two .widget_nav_menu {
            margin: 0 !important;
            max-width: 100% !important;
        }

        .footer-two .widget_nav_menu ul {
            display: inline-flex !important;
            flex-wrap: wrap !important;
            gap: 6px 18px !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .footer-two .widget_nav_menu ul li {
            margin: 0 !important;
        }

        .footer-two .widget_nav_menu ul li a {
            color: rgba(255, 255, 255, 0.7) !important;
            font-size: 13.5px !important;
            font-weight: 500 !important;
            padding: 4px 6px !important;
            border-radius: 6px;
            transition: all 0.3s ease !important;
        }

        .footer-two .widget_nav_menu ul li a:hover {
            color: var(--primary-color) !important;
        }

        .footer-divider {
            border: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.07);
            margin: 30px 0 !important;
        }

        .social-style-one a {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 36px !important;
            height: 36px !important;
            border-radius: 50% !important;
            background: rgba(255, 255, 255, 0.04) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: rgba(255, 255, 255, 0.75) !important;
            font-size: 14px !important;
            box-shadow: none !important;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        }

        .social-style-one a:hover {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            color: #ffffff !important;
            transform: translateY(-2px) !important;
            box-shadow: none !important;
        }

        /* Modern Clean Services Cards */
        .service-card-modern {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 32px 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .service-card-modern:hover {
            border-color: var(--primary-color);
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4), 0 0 16px rgba(6, 146, 140, 0.2);
        }

        .service-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: rgba(6, 146, 140, 0.12);
            border: 1px solid rgba(6, 146, 140, 0.3);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            box-shadow: none !important;
            transition: all 0.3s ease;
        }

        .service-card-modern:hover .service-icon-box {
            background: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
            transform: scale(1.08);
            box-shadow: none !important;
        }

        .service-number-badge {
            font-size: 15px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.4);
            letter-spacing: 1px;
            font-family: 'Inter', sans-serif;
            transition: color 0.3s ease;
        }

        .service-card-modern:hover .service-number-badge {
            color: var(--primary-color);
        }

        .service-card-body h4 {
            font-size: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
            line-height: 1.35;
        }

        .service-card-body p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 14px;
            line-height: 1.65;
            margin: 0;
        }

        .service-card-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.06);
        }

        .service-link-btn {
            display: inline-flex;
            align-items: center;
            font-size: 13px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .service-link-btn i {
            transition: transform 0.3s ease;
        }

        .service-card-modern:hover .service-link-btn {
            color: var(--primary-color);
        }

        .service-card-modern:hover .service-link-btn i {
            transform: translateX(4px);
        }

        /* About Experience Glass Badge */
        .experience-glass-badge {
            position: absolute;
            bottom: 30px;
            left: -20px;
            background: rgba(20, 20, 20, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            padding: 16px 22px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
            z-index: 3;
            transition: 0.3s;
        }

        .experience-glass-badge:hover {
            border-color: var(--primary-color);
            transform: translateY(-4px);
        }

        .experience-glass-badge .exp-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: var(--primary-color);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .experience-glass-badge .exp-text h4 {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }

        .experience-glass-badge .exp-text p {
            margin: 0;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Minimalist Modern Timeline (No Bulky Cards) */
        .timeline-header-minimal h4 {
            color: #ffffff;
            font-size: 21px;
            font-weight: 700;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
        }

        .timeline-minimal-list {
            position: relative;
            padding-left: 26px;
            border-left: 2px solid rgba(255, 255, 255, 0.08);
            margin-left: 8px;
        }

        .timeline-minimal-item {
            position: relative;
            padding-bottom: 34px;
            transition: all 0.3s ease;
        }

        .timeline-minimal-item:last-child {
            padding-bottom: 5px;
        }

        .timeline-dot {
            position: absolute;
            left: -33px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary-color);
            border: 2px solid #000000;
            box-shadow: 0 0 0 3px rgba(6, 146, 140, 0.25);
            transition: all 0.3s ease;
        }

        .timeline-minimal-item:hover .timeline-dot {
            transform: scale(1.3);
            background: #ffffff;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(6, 146, 140, 0.5);
        }

        .timeline-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            line-height: 1;
            margin-bottom: 8px;
        }

        .timeline-period {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            color: var(--primary-color);
            background: rgba(6, 146, 140, 0.12);
            border: 1px solid rgba(6, 146, 140, 0.25);
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
            line-height: 1;
            height: 22px;
            box-sizing: border-box;
        }

        .timeline-org {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
            line-height: 1;
        }

        .timeline-role {
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.35;
            transition: color 0.2s ease;
        }

        .timeline-minimal-item:hover .timeline-role {
            color: var(--primary-color);
        }

        .timeline-desc {
            color: rgba(255, 255, 255, 0.65);
            font-size: 14px;
            line-height: 1.65;
            margin-bottom: 0;
        }

        /* Modern Project Card & Swiper Anti-Clipping */
        .project-swiper {
            width: 100%;
            height: auto;
            padding-top: 15px !important;
            padding-bottom: 50px !important;
            padding-left: 6px !important;
            padding-right: 6px !important;
            margin-top: -15px !important;
            position: relative;
            z-index: 2;
        }

        .project-swiper .swiper-slide {
            height: auto;
            display: flex;
            box-sizing: border-box;
            padding: 4px;
        }

        .project-card-modern {
            width: 100% !important;
            background: #141414 !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 16px !important;
            overflow: hidden !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
            position: relative !important;
            z-index: 1 !important;
            box-sizing: border-box !important;
            transition: all 0.35s cubic-bezier(0.2, 0.8, 0.2, 1) !important;
        }

        .project-card-modern:hover {
            z-index: 10 !important;
            border-color: var(--primary-color) !important;
            transform: translateY(-6px) !important;
            box-shadow: 0 16px 35px rgba(0, 0, 0, 0.7), 0 0 16px rgba(6, 146, 140, 0.3) !important;
        }

        .project-card-modern .image {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden !important;
            border-radius: 15px 15px 0 0 !important;
            position: relative !important;
            background: #0d0d0d;
        }

        .project-card-modern .image img {
            width: 100% !important;
            height: auto !important;
            display: block !important;
            border-radius: 15px 15px 0 0 !important;
            transition: transform 0.4s ease !important;
        }

        .project-card-modern:hover .image img {
            transform: scale(1.04) !important;
        }

        .project-card-content {
            padding: 20px 18px !important;
            flex-grow: 1 !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
        }

        .project-category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #fff;
            font-size: 11px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            z-index: 2;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .project-tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .tech-tag {
            font-size: 11px;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 6px;
            background: rgba(6, 146, 140, 0.08);
            color: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(6, 146, 140, 0.2);
        }

        .project-card-content h3,
        .project-card-content .project-title {
            font-size: 18px !important;
            line-height: 1.35 !important;
            margin-top: 10px !important;
            margin-bottom: 6px !important;
        }

        .project-card-content h3 a,
        .project-card-content .project-title a {
            color: #ffffff !important;
            font-size: 18px !important;
            font-weight: 700 !important;
            letter-spacing: -0.2px;
            transition: color 0.25s ease !important;
        }

        .project-card-content h3 a:hover,
        .project-card-content .project-title a:hover {
            color: var(--primary-color) !important;
        }

        .project-card-content p.text-small {
            font-size: 13.5px !important;
            font-weight: 400 !important;
            color: rgba(255, 255, 255, 0.65) !important;
            line-height: 1.55 !important;
            margin-top: 4px !important;
            margin-bottom: 0 !important;
        }

        .project-action-btns {
            margin-top: 15px;
            padding-top: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .btn-preview-modal,
        .btn-discuss-project {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12.5px;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            white-space: nowrap;
            transition: all 0.3s ease;
            text-align: center;
            flex: 1 1 0;
        }

        .btn-preview-modal {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
        }

        .btn-preview-modal:hover {
            background: rgba(6, 146, 140, 0.15);
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-discuss-project {
            background: rgba(6, 146, 140, 0.15);
            border: 1px solid rgba(6, 146, 140, 0.4);
            color: var(--primary-color);
            text-decoration: none;
        }

        .btn-discuss-project:hover {
            background: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
        }

        .swiper-pagination-bullet {
            background: var(--primary-color) !important;
            opacity: 0.5;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 20px;
            border-radius: 5px;
        }

        /* FAQ Single Image Styles */
        .faq-single-image-wrap {
            position: relative;
            width: 100%;
        }

        .faq-single-image-card {
            width: 100%;
            height: 480px;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            background: #151515;
        }

        .faq-single-image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            display: block;
            border-radius: 16px;
            transition: transform 0.6s ease;
        }

        .faq-single-image-card:hover img {
            transform: scale(1.03);
        }

        @media (max-width: 991px) {
            .faq-single-image-card {
                height: 380px;
            }
        }

        @media (max-width: 575px) {
            .faq-single-image-card {
                height: 280px;
            }
        }

        /* Full Screen Modal Style */
        .full-screen-modal {
            display: none;
            position: fixed;
            z-index: 10000;
            padding-top: 40px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        .full-screen-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 900px;
            border-radius: 10px;
            animation: zoom 0.3s;
        }

        @keyframes zoom {
            from {
                transform: scale(0.7);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #fff;
            font-size: 50px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 10001;
        }

        .close-modal:hover {
            color: var(--primary-color);
        }

        /* Comprehensive Mobile Responsiveness Enhancements */
        @media only screen and (max-width: 767px) {
            .experience-glass-badge {
                position: relative;
                bottom: auto;
                left: auto;
                margin-top: 20px;
                width: 100%;
                justify-content: center;
                padding: 14px 18px;
            }

            .about-info-box {
                padding: 16px 18px !important;
                gap: 14px !important;
            }

            .about-info-box .info-box-item {
                flex: 1 1 100% !important;
                min-width: 100% !important;
            }

            .about-info-box .info-box-item .content a {
                word-break: break-all;
                font-size: 13.5px !important;
            }

            .timeline-minimal-list {
                padding-left: 22px !important;
                margin-left: 4px !important;
            }

            .timeline-dot {
                left: -29px !important;
            }

            .timeline-role {
                font-size: 16.5px !important;
            }

            .service-card-modern {
                padding: 24px 20px !important;
            }

            .service-card-body h4 {
                font-size: 18px !important;
            }

            .service-card-body p {
                font-size: 13.5px !important;
            }

            .contact-form-wrap {
                padding: 24px 18px 15px !important;
                border-radius: 16px !important;
            }

            .project-img-wrap img {
                height: 200px !important;
                object-fit: cover !important;
            }

            .full-screen-content {
                width: 95%;
                margin-top: 25%;
            }
        }

        @media only screen and (max-width: 575px) {
            .hero-btns {
                gap: 10px !important;
            }

            .hero-btns .theme-btn {
                width: 100%;
                text-align: center;
                margin-right: 0 !important;
            }

            .section-title h2 {
                font-size: 26px !important;
                line-height: 1.25 !important;
            }

            .section-title h3 {
                font-size: 20px !important;
            }

            .footer-two .widget_nav_menu ul {
                justify-content: center !important;
                gap: 6px 14px !important;
            }

            .footer-two .widget_nav_menu ul li a {
                font-size: 13px !important;
            }

            .social-style-one a {
                width: 34px !important;
                height: 34px !important;
                font-size: 13px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .project-action-btns {
                flex-direction: column !important;
                gap: 8px !important;
            }

            .btn-preview-modal,
            .btn-discuss-project {
                width: 100% !important;
                padding: 9px 12px !important;
                font-size: 13px !important;
            }
        }
    </style>

    <!-- Swiper and Modal JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Project Swiper
            const swiper = new Swiper('.project-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: '.project-swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                }
            });
        });
    </script>
@endsection

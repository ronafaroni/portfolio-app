@extends('frontend.layouts.app')
@section('title', __('messages.page_title'))
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.header')
    <!-- header area end -->

    <!-- Hero Section Start -->
    <section id="home" class="main-hero-area pt-150 pb-100 rel z-1">
        <div class="container container-1620">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                        <h3><span class="text-muted">{{ __('messages.hero_iam') }}</span></h3>
                        <h1><b>Rona Faroni</b></h1>
                        <h3>{{ __('messages.hero_job') }}</h3>
                        <p>{{ __('messages.hero_desc') }}</p>

                        <div class="hero-btns">
                            <a href="https://wa.me/6285226118681?text={{ urlencode(__('messages.wa_message')) }}"
                                target="_blank" class="theme-btn">
                                {{ __('messages.hire_me') }} <i class="far fa-angle-right"></i>
                            </a>

                            <a href="{{ route('download') }}" target="_blank"
                                class="read-more">{{ __('messages.download_cv') }} <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-sm-5 order-lg-3">
                    <div class="hero-counter-wrap ms-lg-auto rmb-55 wow fadeInUp delay-0-4s">
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text plus" data-speed="3000" data-stop="13">0</span>
                            <span class="counter-title">Years Of Experience</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text k-plus" data-speed="3000" data-stop="8">0</span>
                            <span class="counter-title">Project Complete</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <span class="count-text percent" data-speed="3000" data-stop="99">0</span>
                            <span class="counter-title">Client Satisfactions</span>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4">
                    <div class="wow fadeIn delay-0-3s">
                        {{-- <div class="bg-circle"></div> --}}
                        <img src="{{ asset('/assets/images/hero/founder.webp') }}" alt="{{ __('messages.alt_author') }}">
                        {{-- <div class="progress-shape">
                            <img src="{{ asset('/assets/images/hero/progress-shape.webp') }}" alt="Progress">
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-1"></div>
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
        <div class="for-bgc-black py-130 rpy-100">
            <div class="container">
                <div class="row gap-120 align-items-center">
                    <div class="col-lg-7">
                        <div class="about-content-part rel z-2 rmb-55">
                            <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">{{ __('messages.about_subtitle') }}</span>
                                <h2>{!! __('messages.about_title') !!}</h2>
                                <p>{{ __('messages.about_desc') }}</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-style-one wow fadeInUp delay-0-2s">
                                        <li>{{ __('messages.service_list_1') }}</li>
                                        <li>{{ __('messages.service_list_2') }}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-style-one wow fadeInUp delay-0-2s">
                                        <li>{{ __('messages.service_list_3') }}</li>
                                        <li>{{ __('messages.service_list_4') }}</li>
                                    </ul>
                                </div>


                                <div class="about-info-box mt-25 wow fadeInUp delay-0-2s">
                                    <div class="info-box-item">
                                        <i class="far fa-envelope"></i>
                                        <div class="content">
                                            <span>{{ __('messages.email_us') }}</span><br>
                                            <a href="{{ url('mailto:ronafaroni95@gmail.com') }}">ronafaroni95@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <i class="far fa-phone"></i>
                                        <div class="content">
                                            <span>{{ __('messages.make_call') }}</span><br>
                                            <a href="https://wa.me/6285226118681?text={{ urlencode(__('messages.wa_message')) }}"
                                                target="_blank">
                                                085226118681
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-part wow fadeInUp delay-0-3s">
                            <img src="{{ asset('/assets/images/about/aboutme.webp') }}" alt="{{ __('messages.about_subtitle') }}">
                            {{-- <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                                <img src="{{ asset('/assets/images/about/btn-image1.webp') }}" alt="Image">
                                <h6>Experience Products</h6>
                                <i class="fas fa-arrow-right"></i>
                            </div> --}}
                            <div class="about-btn btn-two wow fadeInRight delay-0-5s">
                                <img src="{{ asset('/assets/images/about/aboutme-icon1.webp') }}" width="35px" alt="{{ __('messages.alt_shape') }}">
                                <h6>{{ __('messages.page_title') }}</h6>
                                <i class="fas fa-arrow-right"></i>
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
    <section id="resume" class="resume-area pt-130 rpt-100 rel z-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="what-i-do-images rmb-55 wow fadeInUp delay-0-2s">
                        <div class="first-image">
                            <img src="{{ asset('/assets/images/about/about-1.webp') }}" alt="{{ __('messages.what_i_do') }}">
                        </div>
                        {{-- <div class="last-image">
                            <img src="{{ asset('/assets/images/about/what-i-do2.jpg') }}" alt="What I do">
                        </div> --}}
                        <div class="icon first"><i class="flaticon-asterisk-1"></i></div>
                        <div class="icon last"><i class="flaticon-asterisk-1"></i></div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="what-i-do-content wow fadeInUp delay-0-4s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">{{ __('messages.what_i_do') }}</span>
                            <h2>{!! __('messages.what_i_do_title') !!}</h2>
                            <p>{{ __('messages.what_i_do_desc') }}</p>
                        </div>
                        <ul class="list-style-two pb-50">
                            <li>{{ __('messages.exp_years') }}</li>
                            <li>{{ __('messages.hero_job') }}</li>
                            <li>{{ __('messages.special_sol') }}</li>
                        </ul>

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
    <section id="services" class="services-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
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
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">01.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_1_title') }}</h4>
                            <p>{{ __('messages.service_1_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">02.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_2_title') }}</h4>
                            <p>{{ __('messages.service_2_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">03.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_3_title') }}</h4>
                            <p>{{ __('messages.service_3_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">04.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_4_title') }}</h4>
                            <p>{{ __('messages.service_4_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">05.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_5_title') }}</h4>
                            <p>{{ __('messages.service_5_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">06.</div>
                        <div class="content">
                            <h4>{{ __('messages.service_6_title') }}</h4>
                            <p>{{ __('messages.service_6_desc') }}</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
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
        <div class="for-bgc-black pt-130 rpt-100 pb-100 rpb-70">
            <div class="container">
                <div class="row gap-100">
                    <div class="col-lg-5">
                        <div class="skill-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">{{ __('messages.my_skills') }}</span>
                                <h2>{!! __('messages.skills_title') !!}</h2>
                                <p>{{ __('messages.skills_desc') }}</p>
                            </div>
                            {{-- <a class="theme-btn">Learn More <i class="far fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="skill-items-wrap">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('/assets/images/skills/laravel.webp') }}" width="43%"
                                            alt="{{ __('messages.alt_skill') }}">
                                        <h5>Laravel</h5>
                                        {{-- <span class="percent">96%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('/assets/images/skills/midtrans.webp') }}" width="42%"
                                            alt="{{ __('messages.alt_skill') }}">
                                        <h5>Midtrans</h5>
                                        {{-- <span class="percent">83%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('/assets/images/skills/tailwind.webp') }}" width="68%"
                                            alt="{{ __('messages.alt_skill') }}">
                                        <h5>Tailwind</h5>
                                        {{-- <span class="percent">43%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('/assets/images/skills/javascript.webp') }}" width="42%"
                                            alt="{{ __('messages.alt_skill') }}">
                                        <h5>Javascript</h5>
                                        {{-- <span class="percent">74%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('/assets/images/skills/vuejs.webp') }}" width="54%" alt="{{ __('messages.alt_skill') }}">
                                        <h5>Vue</h5>
                                        {{-- <span class="percent">95%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('/assets/images/skills/react.webp') }}" width="50%" alt="{{ __('messages.alt_skill') }}">
                                        <h5>React</h5>
                                        {{-- <span class="percent">46%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('/assets/images/skills/nextjs.webp') }}" width="45%" alt="{{ __('messages.alt_skill') }}">
                                        <h5>Next Js</h5>
                                        {{-- <span class="percent">22%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('/assets/images/skills/github.webp') }}" width="45%" alt="{{ __('messages.alt_skill') }}">
                                        <h5>GitHub</h5>
                                        {{-- <span class="percent">84%</span> --}}
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
    <section id="portfolio" class="projects-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
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
                <div class="col-lg-12">
                    <div class="swiper project-swiper">
                        <div class="swiper-wrapper">
                            <!-- Project 1 -->
                            <div class="swiper-slide">
                                <div class="blog-item style-two">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.webp" alt="{{ __('messages.proj_1_title') }}"
                                            class="project-img-modal cursor-pointer">
                                    </div>
                                    <div class="px-2 py-2">
                                        <h5><a href="javascript:void(0)"><b>{{ __('messages.proj_1_title') }}</b> <br> <span
                                                    class="text-muted text-small">{{ __('messages.proj_1_desc') }}</span></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Project 2 -->
                            <div class="swiper-slide">
                                <div class="blog-item style-two">
                                    <div class="image">
                                        <img src="assets/images/projects/project-2.webp" alt="{{ __('messages.proj_2_title') }}"
                                            class="project-img-modal cursor-pointer">
                                    </div>
                                    <div class="px-2 py-2">
                                        <h5><a href="javascript:void(0)"><b>{{ __('messages.proj_2_title') }}</b> <br> <span
                                                    class="text-muted text-small">{{ __('messages.proj_2_desc') }}</span></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Project 3 -->
                            <div class="swiper-slide">
                                <div class="blog-item style-two">
                                    <div class="image">
                                        <img src="assets/images/projects/project-3.webp" alt="{{ __('messages.proj_3_title') }}"
                                            class="project-img-modal cursor-pointer">
                                    </div>
                                    <div class="px-2 py-2">
                                        <h5><a href="javascript:void(0)"><b>{{ __('messages.proj_3_title') }}</b> <br> <span
                                                    class="text-muted text-small">{{ __('messages.proj_3_desc') }}</span></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan lebih banyak jika ada -->
                            <div class="swiper-slide">
                                <div class="blog-item style-two">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.webp" alt="{{ __('messages.alt_project') }}"
                                            class="project-img-modal cursor-pointer">
                                    </div>
                                    <div class="px-2 py-2">
                                        <h5><a href="javascript:void(0)"><b>{{ __("messages.proj_1_title") }}</b> <br> <span
                                                    class="text-muted text-small">{{ __("messages.proj_1_desc") }}</span></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Pagination -->
                        <div class="swiper-pagination mt-40"></div>
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

    <!-- SLIDER ATAS - BERGERAK KE KANAN -->
    {{-- <div class="tools-slideshow mt-50" style="overflow:hidden;position:relative;">
        <div class="slider slider-right">
            <div class="slide-track">
                <!-- isi asli -->
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-2ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-3ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">
                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-4ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">
                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-5ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-6ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-7ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-8ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-9ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- SLIDER BAWAH - BERGERAK KE KIRI -->
    {{-- <div class="tools-slideshow mt-30" style="overflow:hidden;position:relative;">
        <div class="slider slider-left">
            <div class="slide-track">
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-2ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-3ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-4ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-5ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">
                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-6ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-7ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">


                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-8ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">
                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item design marketing graphics">
                    <div class="project-item style-three wow fadeInUp delay-0-9ms animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="project-image">
                            <img src="assets/images/projects/project-1.webp" alt="Project">
                        </div>
                        <div class="project-content">
                            <h4><a href="project-details.html" class="text-white">Mobile Application Design</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- FAQs Area start -->
    <section id="faqs" class="faqs-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-image-part rmb-55 wow fadeInUp delay-0-2s">
                        <div class="image-one">
                            <img src="{{ asset('/assets/images/about/cta2.webp') }}" alt="{{ __('messages.alt_faq') }}">
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('/assets/images/about/cta1.webp') }}" alt="{{ __('messages.alt_faq') }}">
                        </div>
                        <div class="square-shape"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content-part rel z-2">
                        <div class="section-title mb-40 wow fadeInUp delay-0-4s">
                            <h2>{!! __('messages.faq_title') !!}</h2>
                        </div>
                        <div class="accordion wow fadeInUp delay-0-4s" id="faq-accordion">
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        {{ __('messages.q1') }}
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a1') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        {{ __('messages.q2') }}
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a2') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        {{ __('messages.q3') }}
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a3') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        {{ __('messages.q4') }}
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>{{ __('messages.a4') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        {{ __('messages.q5') }}
                                    </button>
                                </h5>
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
    <section id="contact" class="contact-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
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
                <div class="col-lg-8">
                    <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                        <form id="contactForm" class="contactForm" onsubmit="sendToWhatsApp(event)">
                            @csrf
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">{{ __('messages.full_name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('messages.name_placeholder') }}" required>
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-5">
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


    <!-- Client Log start -->
    <div class="client-logo-area rel pt-100 z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                        <h6>{!! __('messages.client_title') !!}</h6>
                    </div>
                </div>
            </div>
            <div class="client-logo-wrap">
                <a class="client-logo-item wow fadeInUp delay-0-2s"">
                        <img src=" {{ asset('/assets/images/client-logos/bumikartini.webp') }}" alt="{{ __('messages.alt_client') }}">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-3s">
                    <img src="{{ asset('/assets/images/client-logos/techdor.webp') }}" alt="{{ __('messages.alt_client') }}">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-4s">
                    <img src="{{ asset('/assets/images/client-logos/sigawai.webp') }}" alt="{{ __('messages.alt_client') }}">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-5s">
                    <img src="{{ asset('/assets/images/client-logos/spmb.webp') }}" width="90%" alt="{{ __('messages.alt_client') }}">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-6s">
                    <img src="{{ asset('/assets/images/client-logos/bungacoklat.webp') }}" width="120%" alt="{{ __('messages.alt_client') }}">
                </a>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </div>
    <!-- Client Log end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footer')
    <!-- footer area end -->
    <!-- Full Screen Image Modal -->
    <div id="fullScreenModal" class="full-screen-modal">
        <span class="close-modal">&times;</span>
        <img class="full-screen-content" id="imgFull">
    </div>

    <!-- Swiper and Modal CSS -->
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .project-swiper {
            width: 100%;
            height: 100%;
            padding-bottom: 50px;
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

        @media only screen and (max-width: 700px) {
            .full-screen-content {
                width: 95%;
                margin-top: 25%;
            }
        }
    </style>

    <!-- Swiper and Modal JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper
            const swiper = new Swiper('.project-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                }
            });

            // Modal Logic
            const modal = document.getElementById("fullScreenModal");
            const modalImg = document.getElementById("imgFull");
            const images = document.querySelectorAll(".project-img-modal");
            const closeBtn = document.querySelector(".close-modal");

            images.forEach(img => {
                img.onclick = function () {
                    modal.style.display = "flex";
                    modal.style.alignItems = "center";
                    modalImg.src = this.src;
                    document.body.style.overflow = "hidden"; // Disable scroll
                }
            });

            closeBtn.onclick = function () {
                modal.style.display = "none";
                document.body.style.overflow = "auto"; // Enable scroll
            }

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    document.body.style.overflow = "auto";
                }
            }
        });
    </script>
@endsection

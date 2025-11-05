@extends('frontend.layouts.app')
@section('title', 'Landing Page')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Hero Section Start -->
    <section id="home" class="main-hero-area pt-150 pb-100 rel z-1">
        <div class="container container-1620">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                        <span class="h2">Hello, i’m </span>
                        <h1><b>Rona Faroni</b></h1>
                        <h3>Fullstack Web Developer <br><span>PT. Sintesa Digital Solution</span></h3>
                        <p>
                            Let’s build something amazing together. Your dream website and app start here — powerful,
                            modern, and made to grow your business.</b>
                        </p>
                        <div class="hero-btns">
                            <a href="{{ route('contact') }}" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                            <a href="{{ route('contact') }}" class="read-more">Download CV <i
                                    class="far fa-angle-right"></i></a>
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
                        <img src="{{ asset('/assets/images/hero/founder.png') }}" alt="Author">
                        {{-- <div class="progress-shape">
                            <img src="{{ asset('/assets/images/hero/progress-shape.png') }}" alt="Progress">
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
                                <span class="sub-title mb-15">About Me</span>
                                <h2>Professional <span> Problem Solver</span> for Modern Digital Products</h2>
                                <p>
                                    I’m Rona Faroni — a passionate Fullstack Developer who transforms complex challenges
                                    into simple, elegant, and impactful digital experiences. I blend creativity, design
                                    thinking, and technical precision to build products <br> that don’t just work — they
                                    inspire.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-style-one wow fadeInUp delay-0-2s">
                                        <li>Website Development</li>
                                        <li>Brand & Visual Identity</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-style-one wow fadeInUp delay-0-2s">
                                        <li>Custom Business System</li>
                                        <li>Technical Supports</li>
                                    </ul>
                                </div>


                                <div class="about-info-box mt-25 wow fadeInUp delay-0-2s">
                                    <div class="info-box-item">
                                        <i class="far fa-envelope"></i>
                                        <div class="content">
                                            <span>Email Us</span><br>
                                            <a href="{{ url('mailto:ronafaroni95@gmail.com') }}">ronafaroni95@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <i class="far fa-phone"></i>
                                        <div class="content">
                                            <span>Make A Call</span><br>
                                            <a href="https://wa.me/6285226118681" target="_blank">085226118681</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-part wow fadeInUp delay-0-3s">
                            <img src="{{ asset('/assets/images/about/aboutme.png') }}" alt="About Me">
                            {{-- <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                                <img src="{{ asset('/assets/images/about/btn-image1.png') }}" alt="Image">
                                <h6>Experience Products</h6>
                                <i class="fas fa-arrow-right"></i>
                            </div> --}}
                            <div class="about-btn btn-two wow fadeInRight delay-0-5s">
                                <img src="{{ asset('/assets/images/about/aboutme-icon1.png') }}" width="35px"
                                    alt="Image">
                                <h6>Rona Faroni</h6>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="dot-shape">
                                <img src="{{ asset('/assets/images/shape/shape.png') }}" width="30px" alt="Shape">
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
                            <img src="{{ asset('/assets/images/about/about-1.png') }}" alt="What I do">
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
                            <span class="sub-title mb-15">What I Do</span>
                            <h2>Transforming Problems into <span>Seamless Digital Solutions</span></h2>
                            <p>With over 3 years of experience, I design and develop modern websites and mobile applications
                                that are functional, elegant, and user-focused. </p>
                        </div>
                        <ul class="list-style-two pb-50">
                            <li>3+ Years of Experience</li>
                            <li>Fullstack Developer</li>
                            <li>Reliable Web & App Solutions</li>
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
                        <span class="sub-title mb-15">Featured Services</span>
                        <h2>My <span>Special Services</span> For your Business Development</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">01.</div>
                        <div class="content">
                            <h4>Website Development</h4>
                            <p>Build responsive, fast, and modern business.</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">02.</div>
                        <div class="content">
                            <h4>Custom Web Applications</h4>
                            <p>Build scalable and secure system.</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">03.</div>
                        <div class="content">
                            <h4>Company Profile</h4>
                            <p>Present your brand with web identity.</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">04.</div>
                        <div class="content">
                            <h4>E-Commerce</h4>
                            <p>Build online stores that convert and scale.</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="number">05.</div>
                        <div class="content">
                            <h4>Business Management System</h4>
                            <p>Automate operations with custom tools.</p>
                        </div>
                        <a class="details-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="number">06.</div>
                        <div class="content">
                            <h4>Maintenance & Tech Support</h4>
                            <p>Keep your system running smoothly 24/7.</p>
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
                                <span class="sub-title mb-15">My Skills</span>
                                <h2>Explore <span>My Expertise and Experience</span></h2>
                                <p>
                                    I create efficient, scalable, and user-centric digital solutions — combining technical
                                    precision with real-world insight to deliver impactful results.
                                </p>
                            </div>
                            {{-- <a class="theme-btn">Learn More <i class="far fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="skill-items-wrap">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('/assets/images/skills/laravel.png') }}" width="43%"
                                            alt="Skill">
                                        <h5>Laravel</h5>
                                        {{-- <span class="percent">96%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('/assets/images/skills/midtrans.png') }}" width="42%"
                                            alt="Skill">
                                        <h5>Midtrans</h5>
                                        {{-- <span class="percent">83%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('/assets/images/skills/tailwind.png') }}" width="68%"
                                            alt="Skill">
                                        <h5>Tailwind</h5>
                                        {{-- <span class="percent">43%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('/assets/images/skills/javascript.png') }}" width="42%"
                                            alt="Skill">
                                        <h5>Javascript</h5>
                                        {{-- <span class="percent">74%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-2s">
                                        <img src="{{ asset('/assets/images/skills/vuejs.png') }}" width="54%"
                                            alt="Skill">
                                        <h5>Vue</h5>
                                        {{-- <span class="percent">95%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-3s">
                                        <img src="{{ asset('/assets/images/skills/react.png') }}" width="50%"
                                            alt="Skill">
                                        <h5>React</h5>
                                        {{-- <span class="percent">46%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-4s">
                                        <img src="{{ asset('/assets/images/skills/nextjs.png') }}" width="45%"
                                            alt="Skill">
                                        <h5>Next Js</h5>
                                        {{-- <span class="percent">22%</span> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="skill-item wow fadeInUp delay-0-5s">
                                        <img src="{{ asset('/assets/images/skills/github.png') }}" width="45%"
                                            alt="Skill">
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
                        <span class="sub-title mb-15">Latest Works</span>
                        <h2>Explore My Popular <span>Projects</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-standard-wrap">
                        <div class="row">
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-3s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-5s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-3s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 item">
                                <div class="blog-item style-two wow fadeInUp delay-0-5s">
                                    <div class="image">
                                        <img src="assets/images/projects/project-1.png" alt="Blog Standard">
                                    </div>
                                    <div class="content">
                                        <h5><a href="blog-details.html">Tips For Conducting to Usability Studies With
                                                Participants</a></h5>

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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
                            <img src="assets/images/projects/project-1.png" alt="Project">
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
    <section id="faqs" class="faqs-area py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-image-part rmb-55 wow fadeInUp delay-0-2s">
                        <div class="image-one">
                            <img src="{{ asset('/assets/images/about/cta2.png') }}" alt="FAQ">
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('/assets/images/about/cta1.png') }}" alt="FAQ">
                        </div>
                        <div class="square-shape"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content-part rel z-2">
                        <div class="section-title mb-40 wow fadeInUp delay-0-4s">
                            <h2>Professional Solutions For Your <span>Digital Product</span> Development</h2>
                        </div>
                        <div class="accordion wow fadeInUp delay-0-4s" id="faq-accordion">
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        What services do you provide ?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            We offer end-to-end digital solutions — including website development, custom
                                            business systems, web apps, and ongoing technical support. Every project is
                                            tailored to meet your specific business needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        How long does a typical project take ?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Project duration depends on its complexity. A standard website usually takes
                                            around 2–4 weeks, while custom systems or apps may take 1–2 months from concept
                                            to launch.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        Can you create a design based on my business idea ?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes. We can help you from the very beginning — starting with idea consultation,
                                            UI/UX design, and development until your product goes live.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">
                                        Do you offer maintenance or support after project delivery ?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Absolutely. We provide post-launch support, updates, and maintenance to ensure
                                            your website or app runs efficiently and remains secure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        How can I start working with you ?
                                    </button>
                                </h5>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Simply reach out through our contact form, email, or WhatsApp. We’ll discuss
                                            your goals, provide recommendations, and prepare a custom proposal for your
                                            project.
                                        </p>
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
    <section id="contact" class="contact-area pt-95 pb-150 rpt-70 rpy-100 rpb-100 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">Get In Touch</span>
                            <h2>Let’s Talk About Your <span>Next Projects</span></h2>
                            <p>
                                Transform your ideas into powerful, scalable products with trusted expertise and
                                real-world experience.
                            </p>
                        </div>
                        <ul class="list-style-two">
                            <li>3+ Years of Experience</li>
                            <li>Fullstack Developer</li>
                            <li>Reliable Web & App Solutions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                        <form id="contactForm" class="contactForm" onsubmit="sendToWhatsApp(event)">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Insert your Full Name" required>
                                        <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="number" id="phone_number" name="phone_number" class="form-control"
                                            placeholder="Insert your Phone Number" required>
                                        <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Create Write Message"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn">
                                            Send Us Message <i class="far fa-angle-right"></i>
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


    <!-- Blog Area start -->
    {{-- <section class="blog-area rel z-1">
        <div class="for-bgc-black pt-130 pb-100 rpt-100 rpb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">News & Blog</span>
                            <h2>Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog1.png') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="blog-meta mb-35">
                                    <a class="tag" href="{{ route('blog') }}">Design</a>
                                    <a class="tag" href="{{ route('blog') }}">Figma</a>
                                </div>
                                <h5><a href="{{ route('blogDetails') }}">Tips For Conductin See Usability Studies</a></h5>
                                <hr>
                                <div class="blog-meta mt-35">
                                    <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25,
                                        2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog2.png') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="blog-meta mb-35">
                                    <a class="tag" href="{{ route('blog') }}">Design</a>
                                    <a class="tag" href="{{ route('blog') }}">Figma</a>
                                </div>
                                <h5><a href="{{ route('blogDetails') }}">Keyboard-Only Suppor Assistive Technology</a>
                                </h5>
                                <hr>
                                <div class="blog-meta mt-35">
                                    <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25,
                                        2023</a>
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
    </section> --}}
    <!-- Blog Area end -->

    <!-- Client Log start -->
    <div class="client-logo-area rel z-1 pt-100 rpt-100 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-title text-center pt-5 mb-65 wow fadeInUp delay-0-2s">
                        <h6>Trusted by Global Clients — <span>Successful Projects Delivered</span></h6>
                    </div>
                </div>
            </div>
            <div class="client-logo-wrap">
                <a class="client-logo-item wow fadeInUp delay-0-2s" href="{{ route('contact') }}">
                    <img src="{{ asset('/assets/images/client-logos/bumikartini.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-3s" href="{{ route('contact') }}">
                    <img src="{{ asset('/assets/images/client-logos/techdor.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-4s" href="{{ route('contact') }}">
                    <img src="{{ asset('/assets/images/client-logos/sigawai.png') }}" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-5s" href="{{ route('contact') }}">
                    <img src="{{ asset('/assets/images/client-logos/spmb.png') }}" width="90%" alt="Client Logo">
                </a>
                <a class="client-logo-item wow fadeInUp delay-0-6s" href="{{ route('contact') }}">
                    <img src="{{ asset('/assets/images/client-logos/bungacoklat.png') }}" width="120%"
                        alt="Client Logo">
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
    @include('frontend.includes.footers.footerTwo')
    <!-- footer area end -->
@endsection

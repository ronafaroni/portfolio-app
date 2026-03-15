<!-- footer area start -->
<footer class="main-footer bgc-black footer-two pt-75 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3 col-md-5">
                <div class="footer-widget widget_logo text-center text-md-start wow fadeInUp delay-0-2s">
                    <div class="footer-logo">
                        <a><img src="{{ asset('/assets/images/logos/logo.webp') }}" width="50px" height="auto"
                                alt="{{ __('messages.alt_logo') }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="footer-widget widget_nav_menu me-0 wow fadeInUp delay-0-4s">
                    <ul>
                        <li><a href="#home">{{ __('messages.home') }}</a></li>
                        <li><a href="#about">{{ __('messages.about') }}</a></li>
                        <li><a href="#resume">{{ __('messages.resume') }}</a></li>
                        <li><a href="#services">{{ __('messages.services') }}</a></li>
                        <li><a href="#skills">{{ __('messages.skills') }}</a></li>
                        <li><a href="#portfolio">{{ __('messages.portfolio') }}</a></li>
                        <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <hr class="mb-40">
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="footer-widget widget_text text-center text-lg-start wow fadeInUp delay-0-2s">
                    <div class="text pb-20">
                        <h5><span>{{ __('messages.office_address') }}</span></h5>
                        <p>Jl. GPD Jepara, Jawa Tengah, Indonesia <br>
                            0852-2611-8681 (via WhatsApp)</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="footer-widget widget_social text-center text-lg-end wow fadeInUp delay-0-4s">
                    <div class="social-flow">
                        <h4>{{ __('messages.join_us') }}</h4>
                        <div class="social-style-one">
                            <a href="https://github.com/ronafaroni" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="https://www.facebook.com/rona.fachronie" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ronafachronie" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/ronafaroni" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <hr class="mt-0">
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-10 pb-15">
        <div class="container">
            <div class="copyright-text text-center">
                <p>Copyright &copy; {{ date('Y') }}. {{ __('messages.rights_reserved') }}</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
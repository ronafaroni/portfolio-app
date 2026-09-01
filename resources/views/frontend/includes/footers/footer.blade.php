<!-- footer area start -->
<footer class="main-footer footer-two pt-50 pb-35 rel z-1">
    <div class="container">
        <!-- Main Footer Row: Logo + Contact on Left, Navigation Menu on Right -->
        <div class="row align-items-center justify-content-between g-4">
            <!-- Logo (Left) -->
            <div class="col-lg-6 col-md-12">
                <div class="footer-contact-brand d-flex align-items-center justify-content-center justify-content-lg-start">
                    <div class="footer-logo flex-shrink-0">
                        <a href="#home">
                            <img src="{{ asset('/assets/images/logos/logo.webp') }}" width="48px" height="auto" alt="{{ __('messages.alt_logo') }}">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Navigation Menu (Right, Sejajar dengan Kontak) -->
            <div class="col-lg-6 col-md-12">
                <div class="footer-widget widget_nav_menu me-0 text-center text-lg-end">
                    <ul class="d-inline-flex flex-wrap justify-content-center justify-content-lg-end mb-0">
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
        </div>

        <!-- Clean Thin Divider with symmetric gap -->
        <hr class="footer-divider my-30">

        <!-- Bottom Footer Row: Copyright on Left, Social Media on Right -->
        <div class="row align-items-center justify-content-between g-3">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-muted" style="font-size: 13px;">
                    Copyright &copy; {{ date('Y') }} <b>Rona Faroni</b>. {{ __('messages.rights_reserved') }}.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="social-style-one d-inline-flex align-items-center justify-content-center justify-content-md-end gap-2">
                    <a href="https://github.com/ronafaroni" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://www.facebook.com/rona.fachronie" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ronafachronie" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.threads.net/@ronafachronie" target="_blank" rel="noopener noreferrer" title="Threads" aria-label="Threads">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14" height="14" fill="currentColor">
                            <path d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.3-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 144.2 59 191.9 58.6 256c.5 64.1 13.6 111.8 38.9 143.8c28.1 35.6 71.2 53.9 128.2 54.4c51.4-.4 86.5-13.3 113.6-40.4c31.7-31.7 33.8-71.1 23.9-94.1c-6.8-15.8-20.1-28.7-39.7-38.3c-2.4-1.2-4.9-2.3-7.5-3.3c-12.7 58.7-48.4 94.6-104.9 94.6c-54.6 0-93.5-38.9-93.5-93.5c0-57.8 42.6-96.2 108.6-96.2c35.6 0 65.6 10.4 87.8 28.5l-26.6 30.9c-16.7-13.3-38.1-20.9-61.2-20.9c-41.9 0-68.6 23.4-68.6 57.7c0 33.9 23.3 54.5 53.5 54.5c39.6 0 63.6-27.8 69.8-75.1l-.3-.1zm-105.1 41.7c-1.3 2.1-2.9 4-4.8 5.7c-5.7 5.1-13.7 8.3-23.2 8.3c-15.6 0-26.7-9.8-26.7-25.2c0-16.9 12.8-27.8 34.3-27.8c7.4 0 14.1 1.2 20.4 3.6v35.4z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/ronafaroni" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
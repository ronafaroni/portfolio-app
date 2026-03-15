<!-- main header -->
<header class="main-header menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('/assets/images/logos/logo.webp') }}" alt="{{ __('messages.alt_logo') }}"
                                title="{{ __('messages.alt_logo') }}">
                        </a>
                    </div>
                </div>

                <div class="nav-outer clearfix mx-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo my-15">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/assets/images/logos/logo.webp') }}"
                                        alt="{{ __('messages.alt_logo') }}" title="{{ __('messages.alt_logo') }}">

                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse" aria-label="{{ __('messages.aria_toggle') }}">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @include('frontend.includes.partials.navbar')
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Language Toggle (Dropdown) -->
                <div class="lang-switcher ms-3 ms-lg-4">
                    <div class="dropdown">
                        <button class="lang-btn" type="button" id="langDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if(App::getLocale() == 'id')
                                <img src="https://flagcdn.com/w20/id.png" alt="ID">
                                <span class="ms-1">ID</span>
                            @else
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN">
                                <span class="ms-1">EN</span>
                            @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0" aria-labelledby="langDropdown"
                            style="background: #1a1a1a; padding: 10px; border-radius: 12px; margin-top: 15px;">
                            <li>
                                <a class="dropdown-item @if(App::getLocale() == 'id') active @endif py-2 px-3 rounded"
                                    href="{{ route('lang.switch', 'id') }}"
                                    style="color: white; font-size: 14px; display: flex; align-items: center; gap: 10px; transition: 0.3s;">
                                    <img src="https://flagcdn.com/w20/id.png" alt="ID"> Indonesia
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item @if(App::getLocale() == 'en') active @endif py-2 px-3 rounded"
                                    href="{{ route('lang.switch', 'en') }}"
                                    style="color: white; font-size: 14px; display: flex; align-items: center; gap: 10px; transition: 0.3s;">
                                    <img src="https://flagcdn.com/w20/gb.png" alt="EN"> English
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Menu Button -->
                {{-- <div class="menu-btns">
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <img src="{{ asset('/assets/images/shape/sidebar-tottler.svg') }}" alt="Toggler">
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
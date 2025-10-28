<!-- main header -->
<header class="main-header menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('/assets/images/logos/logo.png') }}" alt="Logo" width="170px"
                                title="Logo"></a>
                    </div>
                </div>

                <div class="nav-outer clearfix mx-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo my-15">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/assets/images/logos/logo.png') }}" width="170px"
                                        alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
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

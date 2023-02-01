<header id="header" class="header header-layout-type-header-3rows header-nav-left">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel:
                            +440-98-5298</li>
                        <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i>
                            info@example.com</li>
                        <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> 121
                            King Street, Melbourne</li>

                        <li class="">
                            <a href="{{ route('set_eng') }}" class="nav-link">
                                ENG
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('set_jp') }}" class="nav-link">
                                JP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="element pt-0 pt-lg-10 pb-0">
                        <a href="ajax-load/form-appointment.html" class="btn btn-theme-colored2 btn-sm ajaxload-popup">
                            License No.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto align-self-center header-mid-left text-center text-xl-start">
                    <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                        <img class="logo-default logo-1x" src="{{ asset('assets/images/logo-wide.png') }}"
                            alt="Logo">
                        <img class="logo-default logo-2x retina" src="{{ asset('assets/images/logo-wide%402x.png') }}"
                            alt="Logo">
                    </a>
                </div>
                <div class="col-xl-auto align-self-center ms-xl-auto header-mid-right text-center text-xl-end">
                    <div class="header-mid-column3-container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb"> <a href="tel:(123)456-78-90"> <i
                                                class="flaticon-contact-044-call-1 font-icon  sm-display-block"></i>
                                        </a></div>
                                    <div class="media-body">
                                        <h5 class="title">Call us at</h5>
                                        <div class="subtitle"><a href="tel:(123)456-78-90">(123)456-78-90</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb"> <a href="mailto:info@example.com"> <i
                                                class="flaticon-contact-043-email-1 font-icon  sm-display-block"></i>
                                        </a></div>
                                    <div class="media-body">
                                        <h5 class="title">Email us</h5>
                                        <div class="subtitle"><a href="mailto:info@example.com">info@example.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb"> <a href="#"> <i
                                                class="flaticon-contact-025-world font-icon  sm-display-block"></i>
                                        </a></div>
                                    <div class="media-body">
                                        <h5 class="title">Envato HQ</h5>
                                        <div class="subtitle">121 King Street, Melbourne</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="fade"
                                data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">

                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>



                                    <li class="menu-item">
                                        <a href="#">
                                            Our Services
                                        </a>
                                        <ul class="dropdown">
                                            @foreach ($countryies as $country)
                                                <li>
                                                    <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                                        {{ $country->title ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{ route('japanese_language.index') }}">
                                            Japan Language School
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('training') }}">
                                            Training Center
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">
                                            @if (session('key') == 'jp')
                                                求人応募
                                            @else
                                                Jobs Apply
                                            @endif
                                        </a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="{{ route('cv.index') }}">
                                                    @if (session('key') == 'jp')
                                                        履歴書を送信
                                                    @else
                                                        Submit CV
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('employer.index') }}">
                                                    @if (session('key') == 'jp')
                                                        雇用者フォーム
                                                    @else
                                                        Employer Form
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="#">
                                            Canditates
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('activities.index') }}">
                                            Activities
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="row d-block d-xl-none">
                        <div class="col-12">
                            <nav id="top-primary-nav-clone"
                                class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav-clone"
                                    class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

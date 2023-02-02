<header id="header" class="header header-layout-type-header-3rows header-nav-left">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone" style="background-color: #2978B8; padding: 2px;">
                            License No.
                            **/****
                        </li>

                        <li class="contact-email">
                            <i class="fa fa-envelope font-icon sm-display-block"></i>
                            <a href="mailto:info@newgoldenway.com">
                                info@newgoldenway.com
                            </a>
                        </li>

                        <li class="contact-address">
                            <i class="fa fa-clock font-icon sm-display-block"></i>
                            9:00 AM to 5:00 PM
                        </li>

                        <li class="">
                            <a href="{{ route('set_eng') }}" class="nav-link">
                                <img src="{{ asset('data/us.gif') }}" style="width: 35px;">
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('set_jp') }}" class="nav-link">
                                <img src="{{ asset('data/jp.jpeg') }}" style="width: 35px;">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="element pt-0 pt-lg-10 pb-0">
                        <a href="tel:+959 793 222 113" class="btn btn-theme-colored2 btn-sm">
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">

                {{-- menuzord-brand site-brand --}}

                <div class="col-xl-auto align-self-center header-mid-left text-center text-xl-start">
                    <a class="" href="{{ route('home') }}">
                        <img class="logo-default logo-1x" src="{{ asset('data/newgoldenway.png') }}"
                            alt="Logo" style="width: 150px;">
                    </a>
                </div>

                <div class="col-xl-auto align-self-center header-mid-left text-center text-xl-start">
                    <a class="" href="{{ route('home') }}">
                        <img class="logo-default logo-1x" src="{{ asset('data/school_logo.jpg') }}" alt="Logo"
                            style="width: 100px;">
                    </a>
                </div>

                <div class="col-xl-auto align-self-center ms-xl-auto header-mid-right text-center text-xl-end">
                    <div class="header-mid-column3-container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="tel:+959 793 222 113">
                                            <i class="flaticon-contact-044-call-1 font-icon  sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title">Call us at</h5>
                                        <div class="subtitle">
                                            <a href="tel:+959 793 222 113">
                                                +959 793 222 113
                                            </a>
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
                                        <h5 class="title">Address</h5>
                                        <div class="subtitle">
                                            No.A-4, Room(804), Bo Min Yaung Housing, (42)Ward, North Dagon Tsp, Yangon,
                                        </div>
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
                                            @if (session('key') == 'jp')
                                                お問い合わせ
                                            @else
                                                Contact
                                            @endif
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

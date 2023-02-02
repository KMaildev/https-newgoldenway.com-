@extends('layouts.main')
@section('content')
    <section class="z-index-1">
        <div class="container p-30 bg-theme-colored1" data-tm-border-radius="5px" data-tm-margin-top="-80px">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="text-white">
                            @if (session('key') == 'jp')
                                当校へのお問い合わせは、こちらから受け付けております。
                            @else
                                Inquire about our school , we have accepted from here .
                            @endif
                        </h3>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-center">
                            <a href="{{ route('contact.index') }}" target="_self"
                                class="btn btn-sm btn-round btn-outline-light btn-outline">
                                Contact Now
                                @if (session('key') == 'jp')
                                    お問い合わせ
                                @else
                                    Contact
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-lightest">
        <div class="container pb-70">
            <div class="section-content">
                <div class="row">

                    <div class="col-lg-5 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-text-content mb-md-30">
                            <img src="{{ asset('data/about.png') }}" alt="aboutImg2">
                            <h4 class="line-bottom line-bottom-theme-colored1">Who We Are?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates.
                                Iure quam laboriosam ullam omnis nulla deleniti, repellendus sequi reiciendis quas
                                voluptatibus consectetur alias aspernatur deserunt veritatis.</p>
                            <a href="page-service-details.html" class="text-theme-colored1 mt-15">Read More <span
                                    class="fas fa-long-arrow-alt-right text-theme-colored1 ml-10"></span></a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h3 class="line-bottom line-bottom-theme-colored1 mt--0"><i class="far fa-dot-circle ms-0 me-2"></i>
                            @if (session('key') == 'jp')
                                会社について
                            @else
                                About Us
                            @endif
                        </h3>
                        <p style="font-size:16px;font-weight:bold; font-family:Time News Roman; text-align: justify">
                            @if (session('key') == 'jp')
                                当社はミャンマーで発行されたリクルートライセンスを保有する.
                                我々の経験は成功の鍵であり、ほとんどのクライアントが当社と関連している理由でもございます。
                                我々は、強いコミットメント、責任、透明性とともに、何年も結び付けられて、成長して来ました。
                            @else
                                Our company which holds the recruitment license issued in Myanmar. Our experience
                                is the key to our success and also the reason that most of our Clients are associated
                                with us.
                                We have grown over the years with a strong commitmet,responsibility and transparency
                                bound together
                                by family values.
                            @endif
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div
                                    class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                                    <div class="icon-box-wrapper">
                                        <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-round"> <i
                                                    class="flaticon-charity-shelter"></i> </a></div>
                                        <div class="icon-text">
                                            <h5 class="icon-box-title">Shelter for Poor</h5>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni
                                                    temporibus voluptates adipisicing..</p>
                                                <a href="page-service-details.html" class="text-theme-colored1 mt-15">Read
                                                    More <span
                                                        class="fas fa-long-arrow-alt-right text-theme-colored1 ml-10"></span></a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                                    <div class="icon-box-wrapper">
                                        <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-round"> <i
                                                    class="flaticon-charity-shaking-hands-inside-a-heart"></i> </a></div>
                                        <div class="icon-text">
                                            <h5 class="icon-box-title">Help Poor Children</h5>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni
                                                    temporibus voluptates adipisicing..</p>
                                                <a href="page-service-details.html" class="text-theme-colored1 mt-15">Read
                                                    More <span
                                                        class="fas fa-long-arrow-alt-right text-theme-colored1 ml-10"></span></a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                                    <div class="icon-box-wrapper">
                                        <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-round"> <i
                                                    class="flaticon-charity-alms"></i> </a></div>
                                        <div class="icon-text">
                                            <h5 class="icon-box-title">Funding for Poor</h5>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni
                                                    temporibus voluptates adipisicing..</p>
                                                <a href="page-service-details.html" class="text-theme-colored1 mt-15">Read
                                                    More <span
                                                        class="flaticon-charity-world-in-your-hands text-theme-colored1 ml-10"></span></a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                                    <div class="icon-box-wrapper">
                                        <div class="icon-wrapper"> <a class="icon icon-sm icon-dark icon-round"> <i
                                                    class="fas fa-stethoscope"></i> </a></div>
                                        <div class="icon-text">
                                            <h5 class="icon-box-title">Reduce World Poverty</h5>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni
                                                    temporibus voluptates adipisicing..</p>
                                                <a href="page-service-details.html" class="text-theme-colored1 mt-15">Read
                                                    More <span
                                                        class="fas fa-long-arrow-alt-right text-theme-colored1 ml-10"></span></a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-1" style="background-image: linear-gradient(#FFFFFF, #d4d4e8);">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="accordion tm-accordion accordion-gradient accordion-theme-colored1" id="accordion600">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading602">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse601" aria-expanded="true" aria-controls="collapse601">
                                    <strong>
                                        @if (session('key') == 'jp')
                                            我々のヴィジョン
                                        @else
                                            Our Vision
                                        @endif
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapse601" class="accordion-collapse collapse show" aria-labelledby="heading602"
                                data-bs-parent="#accordion600">
                                <div class="accordion-body">
                                    @if (session('key') == 'jp')
                                        <i class="fa fa-check-circle text-primary"></i>
                                        一貫して柔軟な採用ソリューションを提供することにより、機会の発見を可能にする。
                                    @else
                                        <i class="fa fa-check-circle text-primary"></i>
                                        To enable the discovery of opportunities by providing consistently
                                        flexible Recruitment solutions.
                                    @endif
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="accordion tm-accordion accordion-classic accordion-theme-colored1" id="accordion500">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading501">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse501" aria-expanded="true" aria-controls="collapse501">
                                    <strong>
                                        @if (session('key') == 'jp')
                                            我々のミッション
                                        @else
                                            Our Mission
                                        @endif
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapse501" class="accordion-collapse collapse show" aria-labelledby="heading501"
                                data-bs-parent="#accordion500">
                                <div class="accordion-body">
                                    @if (session('key') == 'jp')
                                        <i class="fa fa-check-circle text-primary"></i>
                                        求職者と雇用主の両方の完全な満足を確保するために、最高品質の人材をより迅速に、効率的に、知的に、そして何よりも提供するという絶え間ないコミットメントにより、すべてのクライアントに成功をもたらします。
                                    @else
                                        <i class="fa fa-check-circle text-primary"></i>
                                        To bring success to all of our clients by our relentless commitment to
                                        deliver the highest quality talent more quickly, efficiently,
                                        intelligently and above all to ensure the complete satisfaction of both
                                        the job applicant and the employer.
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="accordion tm-accordion accordion-gradient accordion-theme-colored1" id="accordion600">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading601">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse601" aria-expanded="true" aria-controls="collapse601">
                                    <strong>
                                        @if (session('key') == 'jp')
                                            我々のミッション
                                        @else
                                            Our Values
                                        @endif
                                    </strong>
                                </button>
                            </h2>
                            <div id="collapse601" class="accordion-collapse collapse show" aria-labelledby="heading601"
                                data-bs-parent="#accordion600">
                                <div class="accordion-body">
                                    @if (session('key') == 'jp')
                                        <i class="fa fa-check-circle text-primary"></i>
                                        カスタマイズされた費用対効果の高いソリューションを世界中の組織に提供し、競合他社よりも優位に立つこと。
                                        <br>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        適切な才能と目標を特定し、適切な仕事を確保するのに役立ちます。
                                    @else
                                        <i class="fa fa-check-circle text-primary"></i> To deliver customized and
                                        cost-effective solutions to organizations
                                        across the globe that gives them an edge over their competitors.
                                        <br>
                                        <i class="fa fa-check-circle text-primary"></i>
                                        Identify the right talent and goals thus helping them secure the right
                                        jobs.
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: white;">
        <div class="container py-5">
            <div class="section-content">
                <div class="row d-flex justify-content-evenly">

                    <div class="col-sm-12 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s"
                        style="border: 2px solid #B1812C; padding: 20px; background-image: linear-gradient(#4dc0f2, #085070);">
                        <div
                            class="tm-sc-icon-box icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                            <div class="icon-box-wrapper">
                                <div class="icon-wrapper">
                                    <a class="icon icon-lg icon-rounded icon-border-effect effect-rounded">
                                        <i class="fa fa-phone text-white"></i>
                                    </a>
                                </div>
                                <div class="icon-text">
                                    <h3 class="icon-box-title text-upppercase text-white" style="font-size: 26px;">
                                        @if (session('key') == 'jp')
                                            お気軽にお問い合わせ下さい
                                        @else
                                            Please feel free to contact us
                                        @endif
                                    </h3>
                                    <a class="btn btn-theme-colored1 btn-xs" href="tel:+959 793 222 113">
                                        +959 793 222 113
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s"
                        style="border: 2px solid #B1812C; padding: 20px; background-image: linear-gradient(#085070, #4dc0f2);">
                        <div
                            class="tm-sc-icon-box icon-box text-center iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate-y mb-30">
                            <div class="icon-box-wrapper">
                                <div class="icon-wrapper">
                                    <a class="icon icon-lg icon-rounded icon-border-effect effect-rounded">
                                        <i class="fa fa-envelope text-white"></i>
                                    </a>
                                </div>
                                <div class="icon-text">
                                    <h3 class="icon-box-title text-upppercase text-white" style="font-size: 26px;">
                                        @if (session('key') == 'jp')
                                            夢の実現に向けて一緒に頑張りましょう！
                                        @else
                                            Let’s work together to make your dreams come true!
                                        @endif
                                    </h3>
                                    <a class="btn btn-theme-colored1 btn-xs" href="mailto:info@newgoldenway.com">
                                        Send Mail
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="divider parallax bg-img-cover layer-overlay overlay-dark-5"
        data-tm-bg-img="{{ asset('data/bg1.jpeg') }}" data-parallax-ratio="0.3">
        <div class="container pt-50 pb-50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-lg-start">
                        <p class="lead text-white" style="text-align: center">
                            @if (session('key') == 'jp')
                                専門家と新入社員の求職者向けの海外での仕事と国際的な雇用機会。
                            @else
                                Overseas Jobs And International Employment Opportunities For Professionals & Freshers Job
                                Seekers.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section data-tm-bg-color="#f7f8fa">
        <div class="container py-3">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-xl-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-text-content mb-md-30">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-xl-8">
                                    <div class="tm-sc-section-title section-title text-center">
                                        <div class="title-wrapper">
                                            <h2 class="title" style="font-size: 40px;">
                                                The
                                                <span class="text-theme-colored1">
                                                    Oriental
                                                </span>
                                            </h2>
                                            <p
                                                style="background-color: #4EB5D9; color: white; font-size: 20px; border-radius: 25px; border: 2px solid #B1812C;">
                                                Japanese Language Centre
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @if (session('key') == 'jp')
                                <p
                                    style="text-align: justify; font-family: 'Noto Sans JP'; font-size: 15px; font-wiehgt: 400px; line-height: 32px; color: black">
                                    O r i e n t a l J a p a n e s e L a n g u a g e C e n t r e
                                    はミャンマーの勤勉で優秀な人材を通じて、日本との交流を深め国際社会に貢献して参ります。<br>

                                    ミャンマーの有能な志のある⻘年男女の夢、憧れ希望を叶える為に「あなたの夢を全力でサポートします」を基本理念として、ミャンマー国内で優秀且つ元気のある人材を募り各企業のご要望にお応えすることで、O
                                    r i e n t a l J a p a n e s e L a n g u a g e C e n t r e が日緬友好国際事業環境を促進できる学校と自負しております。
                                    <br>

                                    これも全て日本、ミャンマー両国の企業、監理団体など、関係者様のご支援の賜物と心から感謝しております。
                                </p>
                            @else
                                <p
                                    style="text-align: justify; font-family: 'Noto Sans JP'; font-size: 15px; font-wiehgt: 400px; line-height: 32px; color: black">
                                    The Oriental Japanese Language Centre will contribute to the international community by
                                    deepening exchanges with Japan through Myanmar's diligent and excellent human resources.
                                    <br>

                                    In order to fulfill the dreams and aspirations of Myanmar's talented and ambitious young
                                    men and women, based on the basic philosophy of "I will do my best to support your
                                    dreams", we are recruiting excellent and energetic human resources in Myanmar. We are
                                    proud that the Oriental Japanese Language Center can promote the Japan-Myanmar friendly
                                    international business environment by responding to your requests. <br>

                                    This is all thanks to the support of the parties concerned, including companies and
                                    supervising organizations in both Japan and Myanmar, and I am sincerely grateful.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="section-content">
                <div class="row">

                    <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="couses-box">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{ asset('data/training/19.jpg') }}" alt="ProjectImg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                <div class="overlay-donate-now">
                                    <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">OJC
                                        <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                                </div>
                            </div>
                            <div class="tm-sc-progress-bar progress-bar-floating-percent " data-percent="84"
                                data-unit-left="" data-unit-right="">
                                <div class="progress-title-holder">
                                    <span class="percent">
                                        <span class="symbol-left"></span>
                                        <span class="">+</span>
                                        <span class="symbol-right"></span>
                                    </span>
                                </div>
                                <div class="progress-holder">
                                    <div class="progress-content"></div>
                                </div>
                                <div class="details">
                                    <h5 class="title"><a href="#">Education for Children</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="couses-box">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{ asset('data/training/13.jpg') }}" alt="ProjectImg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                <div class="overlay-donate-now">
                                    <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">OJC
                                        <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                                </div>
                            </div>
                            <div class="tm-sc-progress-bar progress-bar-floating-percent " data-percent="84"
                                data-unit-left="" data-unit-right="">
                                <div class="progress-title-holder">
                                    <span class="percent">
                                        <span class="symbol-left"></span>
                                        <span class="">+</span>
                                        <span class="symbol-right"></span>
                                    </span>
                                </div>
                                <div class="progress-holder">
                                    <div class="progress-content"></div>
                                </div>
                                <div class="details">
                                    <h5 class="title"><a href="#">Education for Children</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="couses-box">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{ asset('data/training/9.jpg') }}" alt="ProjectImg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                <div class="overlay-donate-now">
                                    <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">OJC
                                        <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                                </div>
                            </div>
                            <div class="tm-sc-progress-bar progress-bar-floating-percent " data-percent="84"
                                data-unit-left="" data-unit-right="">
                                <div class="progress-title-holder">
                                    <span class="percent">
                                        <span class="symbol-left"></span>
                                        <span class="">+</span>
                                        <span class="symbol-right"></span>
                                    </span>
                                </div>
                                <div class="progress-holder">
                                    <div class="progress-content"></div>
                                </div>
                                <div class="details">
                                    <h5 class="title"><a href="#">Education for Children</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="couses-box">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{ asset('data/training/10.jpg') }}" alt="ProjectImg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                <div class="overlay-donate-now">
                                    <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">OJC
                                        <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                                </div>
                            </div>
                            <div class="tm-sc-progress-bar progress-bar-floating-percent " data-percent="84"
                                data-unit-left="" data-unit-right="">
                                <div class="progress-title-holder">
                                    <span class="percent">
                                        <span class="symbol-left"></span>
                                        <span class="">+</span>
                                        <span class="symbol-right"></span>
                                    </span>
                                </div>
                                <div class="progress-holder">
                                    <div class="progress-content"></div>
                                </div>
                                <div class="details">
                                    <h5 class="title"><a href="#">Education for Children</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section style="background-color: white;">
        <div class="container py-5">
            <div class="section-content">
                <div class="row d-flex justify-content-evenly">

                    <div class="col-sm-12 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <img src="{{ asset('data/ojc1.png') }}" alt="" style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                    </div>

                    <div class="col-sm-12 col-xl-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <img src="{{ asset('data/ojc2.png') }}" alt="" style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="divider parallax bg-img-cover layer-overlay overlay-theme-colored1-8"
        data-tm-bg-img="{{ asset('data/jpbg.jpeg') }}" data-parallax-ratio="0.3">
        <div class="container pt-90 pb-90">
            <div class="row">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="funfact-item text-center mb-md-30">
                        <div class="icon"><span class="pe-7s-smile"></span></div>
                        <div>
                            <h1 class="counter text-white" data-tm-font-weight="500">
                                <span data-animation-duration="2000" data-value="10" class="animate-number">0</span>
                            </h1>
                            <h5 class="title text-uppercase">
                                Our Experience
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="funfact-item text-center mb-md-30">
                        <div class="icon"><span class="fa fa-users"></span></div>
                        <div>
                            <h1 class="counter text-white" data-tm-font-weight="500">
                                <span data-animation-duration="2000" data-value="675" class="animate-number">0</span>
                            </h1>
                            <h5 class="title text-uppercase">
                                Our Students
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="funfact-item text-center mb-sm-30">
                        <div class="icon"><span class="pe-7s-add-user"></span></div>
                        <div>
                            <h1 class="counter text-white" data-tm-font-weight="500">
                                <span data-animation-duration="2000" data-value="1248" class="animate-number">0</span>
                            </h1>
                            <h5 class="title text-uppercase">
                                Sending Workers
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="funfact-item text-center">
                        <div class="icon"><span class="pe-7s-global"></span></div>
                        <div>
                            <h1 class="counter text-white" data-tm-font-weight="500">
                                <span data-animation-duration="2000" data-value="3" class="animate-number">0</span>
                            </h1>
                            <h5 class="title text-uppercase">
                                Sending Countries
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container py-4">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title" style="font-size: 40px;">
                                    Our
                                    <span class="text-theme-colored1">
                                        Activities
                                    </span>
                                </h2>
                                <p
                                    style="background-color: #4EB5D9; color: white; font-size: 20px; border-radius: 25px; border: 2px solid #B1812C;">
                                    WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="tm-sc-blog blog-style-default mb-lg-30">
                            <article class="post type-post status-publish format-standard has-post-thumbnail">
                                <div class="entry-header">
                                    <div class="post-thumb lightgallery-lightbox">
                                        <div class="post-thumb-inner">
                                            <div class="thumb">
                                                <img src="{{ $activitie->photo }}" alt="Image"
                                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <a class="link" href="{{ route('activities.show', $activitie->id) }}">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <h5 class="entry-title">
                                        @if (session('key') == 'jp')
                                            {{ $activitie->title_jp ?? '' }}
                                        @else
                                            {{ $activitie->title_eng ?? '' }}
                                        @endif
                                    </h5>
                                    <div class="entry-meta mt-0 mb-0">
                                        <span class="mb-10 text-gray-darkgray mr-10 font-size-13">
                                            <i class="far fa-calendar-alt mr-10 text-theme-colored1"></i>
                                            {{ $activitie->upload_date ?? '' }}
                                        </span>
                                    </div>
                                    <div class="post-excerpt">
                                        <div class="mascot-post-excerpt">
                                            @if (session('key') == 'jp')
                                                {{ Str::limit($activitie->description_jp, 100) }}
                                            @else
                                                {{ Str::limit($activitie->description_eng, 100) }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="post-btn-readmore">
                                        <a href="{{ route('activities.show', $activitie->id) }}"
                                            class="btn btn-plain-text-with-arrow">
                                            @if (session('key') == 'jp')
                                                詳細を見る
                                            @else
                                                View Details
                                            @endif
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

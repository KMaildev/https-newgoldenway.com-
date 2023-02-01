@extends('layouts.main')
@section('title', '- Oriental Japanese Language Centre')
@section('content')
    <section class="bg-lightest">
        <div class="container py-3">
            <div class="section-content">
                <div class="row">
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

                    <div class="col-lg-12 col-xl-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image-block">
                                    <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/training/19.jpg') }}"
                                        alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="image-block">
                                    <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/training/13.jpg') }}"
                                        alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                </div>
                            </div>

                            <div class="col-md-4 sm-mt-3">
                                <div class="image-block">
                                    <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/training/9.jpg') }}"
                                        alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="divider parallax bg-img-cover layer-overlay overlay-dark-5" data-tm-bg-img="images/bg/bg13.jpg"
        data-parallax-ratio="0.3">
        <div class="container pt-50 pb-50">
            <div class="row">
                <div class="col-lg-9">
                    <div class="text-center text-lg-start">
                        <p class="lead text-white">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid wolf moon officia aute</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center"> <a class="btn btn-sm btn-light btn-round" href="#" target="_self">Become
                            a Fundraiser</a></div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container pt-60 pt-60">
            <div class="row">
                <div class="col-xl-4">
                    <div class="become-volunteer-box bg-lightest">
                        <h2>Become a Volunteer?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem temporibus quisquam
                            voluptas natus, provident porro et odio perferendis ipsam, amet sint. Iure ipsam consequuntur
                            vero.</p>
                        <a class="btn btn-xs btn-dark btn-theme-colored1" href="page-form-login-register-style1.html">Sign
                            Up Today!</a>
                    </div>
                </div>

                <div class="col-xl-4">
                    <img class="img-fluid box-shadow radius w-100" src="{{ asset('data/training/19.jpg') }}" alt=""
                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">
                </div>

                <div class="col-xl-4">
                    <div class="become-volunteer-box bg-lightest">
                        <h2>Become a Volunteer?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem temporibus quisquam
                            voluptas natus, provident porro et odio perferendis ipsam, amet sint. Iure ipsam consequuntur
                            vero.</p>
                        <a class="btn btn-xs btn-dark btn-theme-colored1" href="page-form-login-register-style1.html">Sign
                            Up Today!</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection

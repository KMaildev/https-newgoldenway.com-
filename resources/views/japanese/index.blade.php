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


    <section class="divider parallax bg-img-cover layer-overlay overlay-dark-5"
        data-tm-bg-img="{{ asset('data/jp_bg.webp') }}" data-parallax-ratio="0.3">
        <div class="container pt-50 pb-50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-lg-start">
                        <p class="lead text-white" style="text-align: center">
                            @if (session('key') == 'jp')
                                オリエンタル日本語学校は、ただ勉強するだけでなく、社会性、チームワーク力、異文化理解力、体験力を身につけ、最高の人間性を身につけるのに最適な場所です。
                            @else
                                The Oriental Japanese Language School is the best place to achieve the highest level of
                                quality
                                for humans by not just only studying , you will get good social skill, team work skill ,
                                power
                                of cultural understanding and experiences.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container pt-60 pt-60">
            <div class="row" style="background-color: #F8F8F8; padding: 40px; border: 4px solid #CCCCCC;">

                <dl class="usp-list">
                    <dt>
                        <p
                            style="background-image: linear-gradient(#4EB5D9, #34788e); padding: 10px; background-color: #4EB5D9; color: white; font-size: 20px; border: 2px solid #B1812C;">
                            @if (session('key') == 'jp')
                                ミッション
                            @else
                                Our Mission
                            @endif
                        </p>
                    </dt>

                    <p style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">
                        <i class="fa fa-check-circle text-primary"></i>
                        @if (session('key') == 'jp')
                            人と企業の可能性を解き放ち、豊かな国際社会の実現に貢献する。
                        @else
                            Unleash the potential of people and companies and contribute to the realization of a
                            prosperous international society.
                        @endif
                    </p>
                </dl>

                <hr style="border-top: 1px dashed #CCCCCC;">

                <dl class="usp-list">
                    <dt>
                        <p
                            style="background-image: linear-gradient(#34788e, #425ce0); padding: 10px; background-color: #4EB5D9; color: white; font-size: 20px; border: 2px solid #B1812C;">
                            @if (session('key') == 'jp')
                                ヴィジョン
                            @else
                                Our Vision
                            @endif
                        </p>
                    </dt>


                    @if (session('key') == 'jp')
                        <p style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">
                            <i class="fa fa-check-circle text-primary"></i>
                            私たちが関わるすべての人に「感謝」の気持ちを灯すべく、どのような価値を提供できるのか常に模索し、自らを磨き続けます。 <br><br>
                        </p>

                        <p style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">
                            <i class="fa fa-check-circle text-primary"></i> 日本語教育を通して、ベトナムと日本の相互理解の促進と両国の架け橋となる人材を育成します。
                        </p>

                        <p style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">
                            <i class="fa fa-check-circle text-primary"></i> 質の高いHRソリューションを提供し、学生と企業の「最適な出会い」を創出します。
                        </p>
                    @else
                        <p
                            style="text-align: justify; font-family: 'Times New Roman', Times, serif; font-size: 16px; line-height: 29px;">
                            <i class="fa fa-check-circle text-primary"></i>
                            We will continue to seek out what kind of value we can provide and continue to improve
                            ourselves in order to light up the feeling of “thank you” for everyone we interact with. <br>

                            <i class="fa fa-check-circle text-primary"></i>
                            Through Japanese language education, we will promote mutual understanding between Vietnam
                            and Japan and develop human resources who will serve as a bridge between the two countries. <br>

                            <i class="fa fa-check-circle text-primary"></i>
                            We provide high-quality HR solutions and create “optimal encounters” between students and
                            companies.
                        </p>
                    @endif
                </dl>

                <hr style="border-top: 1px dashed #CCCCCC;">

                <dt>
                    <p
                        style="background-image: linear-gradient(#e09442, #94763b); padding: 10px; background-color: #4EB5D9; color: white; font-size: 20px; border: 2px solid #B1812C;">
                        @if (session('key') == 'jp')
                            我々の価値観
                        @else
                            Our Values
                        @endif
                    </p>
                </dt>

                <div class="price-list">
                    @if (session('key') == 'jp')
                        <h6 style="text-align: left; font-size: 18px;">
                            1. 信頼関係
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            私たちの一挙一動が学生と企業の未来に影響することを自覚し、高い倫理観に基づく揺るぎない信頼関係を構築します。
                        </p>
                        <hr style="border-top: 3px dotted red;">

                        <h6 style="text-align: left;">
                            2. 尊重し合う関係
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            多様な価値観や考え方を受け入れ尊重し合う関係を築き、常に柔軟かつ最適な 対応を心掛けます。
                        </p>

                        <hr style="border-top: 3px dotted red;">
                        <h6 style="text-align: left;">
                            3. 協働
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            私たちの強みである多様な専門性・文化的背景・地域性を最大限に活かし、ワン チームとして協働します。
                        </p>

                        <hr style="border-top: 3px dotted red;">
                        <h6 style="text-align: left;">
                            4. 改善
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            未来を見据える広い視野を持ち、期待される以上のアイデアを提供するべく、サービスの質を向上させ、私たち自身も進化し続けます。
                        </p>

                        <hr style="border-top: 3px dotted red;">
                        <h6 style="text-align: left;">
                            5. 責任
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            「出会いの創出」という私たちの使命に誇りを持ち、良い成果のためには妥協せ ず、どのような困難にも信念を持って積極的に取り組みます。
                        </p>

                        <hr style="border-top: 3px dotted red;">
                        <h6 style="text-align: left;">
                            6. 勇気
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            よりよい出会いを創出するため、失敗を恐れず率先して変化を促し、絶えず挑戦し続けます。
                        </p>
                    @else
                        <h6 style="text-align: left; font-size: 18px;">
                            1. Trust
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            We are aware that our every move will affect the future of students and companies, and we will
                            build an unwavering relationship of trust based on high ethical standards.
                        </p>

                        <hr style="border-top: 3px dotted red;">

                        <h6 style="text-align: left; font-size: 18px;">
                            2. Respectful Relationship
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            We will build relationships that accept and respect diverse values and ways of thinking, and
                            always strive to respond flexibly and optimally.
                        </p>

                        <hr style="border-top: 3px dotted green;">
                        <h6 style="text-align: left; font-size: 18px;">
                            3. Cooperation
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            We will work together as one team, making the most of our strengths of diverse expertise,
                            cultural backgrounds, and regional characteristics.
                        </p>

                        <hr style="border-top: 3px dotted blue;">
                        <h6 style="text-align: left; font-size: 18px;">
                            4. Improvement
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            With a broad vision of the future, we will continue to improve the quality of our services and
                            evolve ourselves in order to provide ideas that exceed expectations.
                        </p>

                        <hr style="border-top: 3px dotted gray;">
                        <h6 style="text-align: left; font-size: 18px;">
                            5. Responsibility
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            We take pride in our mission of “creating encounters”, do not compromise for good results, and
                            actively tackle any difficulties with conviction.With a broad vision of the future, we will
                            continue to improve the quality of our services and evolve ourselves in order to provide ideas
                            that exceed expectations.
                        </p>

                        <hr style="border-top: 3px dotted black;">
                        <h6 style="text-align: left; font-size: 18px;">
                            6. Courage
                        </h6>
                        <p style="font-family: 'Times New Roman', Times, serif;  font-size:16px; text-align: left;">
                            In order to create better encounters, we will take the initiative to promote change without fear
                            of failure and continue to challenge ourselves.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection

@extends('layouts.main')
@section('title', '- Overseas Jobs')
@section('content')

    <section class="testimonials">
        <div class="container py-3">

            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-9">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title" style="font-size: 40px;">
                                    Overseas
                                    <span class="text-theme-colored1">
                                        Jobs
                                    </span>
                                </h2>
                                <p
                                    style="background-color: #4EB5D9; color: white; font-size: 20px; border-radius: 25px; border: 2px solid #B1812C; padding: 10px;">
                                    Our New Golden Way Agency sent many workers to abroad by given them good training and
                                    leading provice of Human Resource Development Service.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 col-xl-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="tm-sc-testimonials home-layout1-style">
                            <div class="owl-carousel owl-theme tm-owl-carousel-1col testimonial style2">
                                <div class="tm-carousel-item">
                                    @foreach ($jobs as $job)
                                        <div class="testimonial-wrapper d-flex align-items-center mb-20">
                                            <div class="thumb flex-shrink-0">
                                                <img src="{{ $job->photo }}" alt=""
                                                    style="width: 230px; height: 230px; background-size: center; object-fit: cover; border: 2px solid #B1812C; padding: 7px;">
                                            </div>
                                            <div class="flex-grow-1 ms-4">
                                                <h3 class="icon-box-title pt-15 mt-0"
                                                    style="font-size: 25px; font-weight: bold">
                                                    @if (session('key') == 'jp')
                                                        {{ $job->job_title_jp ?? '' }}
                                                    @else
                                                        {{ $job->job_title_eng ?? '' }}
                                                    @endif
                                                </h3>
                                                <hr>
                                                <p class="text-gray" style="font-size: 17px; font-weight: bold;">
                                                    @if (session('key') == 'jp')
                                                        {!! $job->description_jp ?? '' !!}
                                                    @else
                                                        {!! $job->description_eng ?? '' !!}
                                                    @endif
                                                </p>

                                                <a class="btn btn-theme-colored1 btn-round" href="{{ route('cv.index') }}"
                                                    style="background-color: #4DBAF6;">
                                                    @if (session('key') == 'jp')
                                                        履歴書を送信
                                                    @else
                                                        Submit CV
                                                    @endif
                                                </a>

                                                <a class="btn btn-theme-colored1 btn-round"
                                                    href="mailto:info@newgoldenway.com" style="background-color: #B1812C;">
                                                    @if (session('key') == 'jp')
                                                        Send Mail
                                                    @else
                                                        Send Mail
                                                    @endif
                                                </a>

                                                <a class="btn btn-theme-colored1 btn-round"
                                                    href="{{ route('contact.index') }}" style="background-color: #EB5F33;">
                                                    @if (session('key') == 'jp')
                                                        お問い合わせ
                                                    @else
                                                        Contact Us
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection

@extends('layouts.main')
@section('title', '- Activities')
@section('content')
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
                                            View Details
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
@section('script')
@endsection

@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')
    <section class="divider">
        <div class="container">
            <div class="row pt-10">
                <div class="col-lg-4">
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon icon-dark icon-circled">
                                    <i class="flaticon-contact-044-call-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Phone</h5>
                                <div class="content">
                                    <a href="tel:+959 793 222 113">
                                        +959 793 222 113
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon icon-dark icon-circled">
                                    <i class="flaticon-contact-043-email-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Email</h5>
                                <div class="content">
                                    <a href="mailto:info@newgoldenway.com">
                                        info@newgoldenway.com
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon icon-dark icon-circled">
                                    <i class="flaticon-contact-043-email-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Email</h5>
                                <div class="content">
                                    <a href="mailto:info-jp@newgoldenway.com">
                                        info-jp@newgoldenway.com
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon icon-dark icon-circled"> <i
                                        class="flaticon-contact-047-location"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Address</h5>
                                <div class="content">
                                    No.A-4, Room(804), Bo Min Yaung Housing, (42)Quater,North Dagon Tsp, Yangon, Myanmar.
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="mt-0 mb-0">
                        @if (session('key') == 'jp')
                            議論に興味がありますか？
                        @else
                            Interested in discussing?
                        @endif
                    </h2>
                    <p class="font-size-20">
                        @if (session('key') == 'jp')
                            または、お問い合わせフォームに記入してご連絡いただくことも出来ます。我々のチームは素早くあなたに応答いたします。
                        @else
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        @endif
                    </p>

                    <form class="row g-4 needs-validation" autocomplete="off" action="{{ route('contact.store') }}"
                        method="POST" id="create-form">
                        @csrf
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" value="{{ old('name') }}"
                                    placeholder="Your Name*" name="name">
                                @error('name')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Phone</label>
                                <input class="form-control" type="text" value="{{ old('phone') }}"
                                    placeholder="Your Phone*" name="phone">
                                @error('phone')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Email</label>
                                <input class="form-control" name="email" type="text" value="{{ old('email') }}"
                                    placeholder="Email Address">
                                @error('email')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Subject</label>
                                <input class="form-control" name="subject" type="text" value="{{ old('subject') }}"
                                    placeholder="Subject*">
                                @error('subject')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                data-loading-text="Please wait...">Send your message</button>
                            <button type="reset"
                                class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61093.92632213189!2d96.1335249183894!3d16.857562229822392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193006e35234b%3A0x7195e147ac2327f!2sNew%20Golden%20Way%20Services%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1671248227347!5m2!1sen!2smm"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection

@extends('layouts.main')
@section('title', '- Submit CV')
@section('content')
    <section class="divider">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget widget_text text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <div class="textwidget">
                                <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40">
                                    <img class="size-full wp-image-800 aligncenter"
                                        src="{{ asset('assets/images/headphone-128.png') }}" alt="images" width="128"
                                        height="128" />
                                    <h4 style="font-family: Black Han Sans; font-weight: bold; font-size: 27px;">
                                        Let’s Take the Next Step in Your Career, Together
                                    </h4>
                                    <h5 style="font-size: 23px;">
                                        +959 793 222 113
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-brochure-box clearfix">
                            <a class="brochure-box brochure-box-theme-colored1" href="{{ asset('data/cv.docx') }}">
                                <i class="far fa-file-word brochure-icon"></i>
                                <h5 class="text">Simple CV File</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border-1px p-30 mb-0" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <h3 class="text-theme-colored1 mt-0 pt-10" style="font-size: 30px;">
                            Apply a Job You'll Love
                        </h3>
                        <hr>
                        <p style="font-size: 20px; font-weight: bold">
                            Fill your informations and upload your CV.
                        </p>
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="img">Select your CV to upload</label> <br>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" />
                                        @error('attachment_file')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                        data-loading-text="Please wait...">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection

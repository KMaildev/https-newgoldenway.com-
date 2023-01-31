@extends('layouts.main')
@section('title', '- Employer Form')
@section('content')
    <section class="divider">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget widget_text text-center" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <div class="textwidget">
                                <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40"
                                    style="background-color: white !important; background-image: linear-gradient(#2eb1e0, #B1812C);">
                                    <img class="size-full wp-image-800 aligncenter" src="{{ asset('data/bg_logo.png') }}"
                                        alt="images" width="148" height="148" />
                                    <h4 style="font-weight: bold; font-size: 27px; color: black !important">
                                        OUR NEW GOLDEN WAY AGENCY SENT MANY WORKERS TO ABROAD BY GIVEN THEM GOOD TRAINING
                                        AND LEADING PROVICE OF HUMAN RESOURCE DEVELOPMENT SERVICE.
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border-1px p-30 mb-0" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <h3 class="text-theme-colored1 mt-0 pt-10" style="font-size: 30px;">
                            Employer Application Form
                        </h3>
                        <hr>
                        <p style="font-size: 20px; font-weight: bold; font-style: italic">
                            ALTERNATIVELY, YOU MAY CONTACT US BY FILLING UP THE CONTACT FORM. OUR TEAM WILL RESPONSE
                            YOU SHORTLY.
                        </p>
                        <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Email
                                            Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Phone
                                            Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">
                                            Working Experience Requirement
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Additional
                                            Requirement</label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Estimate Salary
                                            Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Gender: Male = 10, Female
                                            =
                                            5</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: Male = 10, Female = 5" name="gender"
                                            value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
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


                <div class="col-md-3">
                    <div class="couses-box" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <div class="thumb">
                            <img class="img-fullwidth"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsc7-j4JAbJ6pJDEz-DTn_kaYeCBZjS-TbQw&usqp=CAU"
                                alt="ProjectImg" style="border: 5px solid #b1812c;">
                            <div class="overlay-donate-now">
                                <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">
                                    Myanmar <i class="flaticon-charity-make-a-donation font-16 ml-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="couses-box" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <div class="thumb">
                            <img class="img-fullwidth"
                                src="https://www.thestandard.com.hk/newsImage/20220519/50071889contentPhoto1.jpeg"
                                alt="ProjectImg" style="border: 5px solid red;">
                            <div class="overlay-donate-now">
                                <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">
                                    Japan <i class="flaticon-charity-make-a-donation font-16 ml-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="couses-box" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                        <div class="thumb">
                            <img class="img-fullwidth"
                                src="https://www.travelandleisure.com/thmb/zXEFKsY1RGyfGOt3by-B3COjVL4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/header-skyline-bangkok-thailand-24HRBKK0622-4be256e6f49545548234faa7e3167746.jpg"
                                alt="ProjectImg" style="border: 5px solid blue;">
                            <div class="overlay-donate-now">
                                <a href="#" class="btn btn-xs btn-flat btn-theme-colored1 mt-10">
                                    Thailand <i class="flaticon-charity-make-a-donation font-16 ml-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection

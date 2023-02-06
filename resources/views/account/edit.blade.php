@extends('layouts.main')
@section('content')
    <div class="row py-5 d-flex justify-content-center" style="background-color: #F3F4F6;">
        <div class="col-md-3" style="background-color: white; padding: 30px;">
            <img src="{{asset('data/user.jpeg')}}"
                alt="">
        </div>

        <div class="col-md-4" style="background-color: white; padding: 30px;">
            <div class="widget">
                <h4 class="widget-title line-bottom" style="font-size: 24px;">
                    Your Account Info
                </h4>
                <hr>
                <div class="opening-hours border-dark">
                    <form class="row g-4 needs-validation" autocomplete="off" action="{{ route('account_update') }}"
                        method="POST" id="create-form">
                        @csrf
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" value="{{ $user->name ?? '' }}"
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
                                <input class="form-control" type="text" value="{{ $user->phone ?? '' }}"
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
                                <label for="name">Date of Birth</label>
                                <input class="form-control" name="birthday" type="date"
                                    value="{{ $user->birthday ?? '' }}" placeholder="Subject*">
                                @error('birthday')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Address</label>
                                <input class="form-control" name="address" type="text" value="{{ $user->address ?? '' }}"
                                    placeholder="Address*">
                                @error('address')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                data-loading-text="Please wait...">Apply Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

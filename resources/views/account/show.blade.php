@extends('layouts.main')
@section('content')
    <div class="row py-5 d-flex justify-content-center" style="background-color: #F3F4F6;">
        <div class="col-md-3" style="background-color: white; padding: 30px;">
            <img src="https://lh3.googleusercontent.com/a/AEdFTp5EXi80YH-F-fwU2USJVgx-JPksSJgC1NVASy6gMQ=s500-c"
                alt="">
        </div>

        <div class="col-md-4" style="background-color: white; padding: 30px;">
            <div class="widget">
                <h4 class="widget-title line-bottom" style="font-size: 24px;">
                    Your Account Info
                </h4>
                <hr>
                <div class="opening-hours border-dark">
                    <ul>
                        <li class="clearfix">
                            <span> Name : </span>
                            <div class="value">
                                {{ $user->name ?? '' }}
                            </div>
                        </li>

                        <li class="clearfix">
                            <span> Email : </span>
                            <div class="value">
                                {{ $user->email ?? '' }}
                            </div>
                        </li>

                        <li class="clearfix">
                            <span> Gender : </span>
                            <div class="value">
                                {{ $user->gender ?? '' }}
                            </div>
                        </li>

                        <li class="clearfix">
                            <span> Date of Birth : </span>
                            <div class="value">
                                {{ $user->birthday ?? '' }}
                            </div>
                        </li>

                        <li class="clearfix">
                            <span> Telephone number : </span>
                            <div class="value">
                                {{ $user->phone ?? '' }}
                            </div>
                        </li>

                        <li class="clearfix">
                            <span> Address : </span>
                            <div class="value">
                                {{ $user->address ?? '' }}
                            </div>
                        </li>
                    </ul>

                    <div class="py-3">
                        <a class="btn btn-theme-colored1 btn-round" href="{{ route('account_edit') }}"
                            style="background-color: #4DBAF6;">
                            <i class="fa fa-edit"></i>
                            Account Setting
                        </a>

                        <a class="btn btn-theme-colored1 btn-round" style="background-color: #B1812C;"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('title', '- Submit CV')
@section('content')
    <section class="divider">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>Building in progress</h1>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection

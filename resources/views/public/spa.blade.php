@extends('layouts.app2')

@section('title')
    Šírava Park - Aquapark & Thermal Spa
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/spa/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/spa/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <div class="media">
                    <div class="media-body">
                        <h3 class="title">@lang('index.spa')</h3>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <p>@lang('spa.1')</p>

        @include('includes/videos/spa')

        <p class="xs-mt-20">@lang('spa.2')</p>

        <p>@lang('spa.3')</p>

        {{--<div class="text-center xs-mb-20">--}}
            {{--<a href="https://thermalsirava.sk/index.php/pobytove-balicky" class="btn btn-blue" target="_blank">@lang('spa.4')</a>--}}
        {{--</div>--}}

        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/5.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/5.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/6.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/6.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/7.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/7.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/8.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/8.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/9.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/9.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/10.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/10.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/11.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/11.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/spa/12.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/spa/sm/12.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>
        </div>

        {{--<div class="text-center xs-mt-20 lg-mt-50">--}}
            {{--<a href="https://thermalsirava.sk/index.php/pobytove-balicky" class="btn btn-blue" target="_blank">@lang('spa.4')</a>--}}
        {{--</div>--}}
    </div>
@endsection

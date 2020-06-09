@extends('layout._layout2')

@section('title')
    Šírava Park - @lang('re/apartments.title')
@endsection

@section('startBody')
    @component('components.reModalComponent', ['re' => 'Apartments'])@endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            {{--<img src="{{ asset('images/re/apartments/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">--}}
            {{--<img src="{{ asset('images/re/apartments/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">--}}

            <img src="{{ asset('images/re/apartments/cover_sm-summer.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/re/apartments/cover-summer.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <h3 class="title">@lang('re/apartments.title')</h3>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20">

        <p>@lang('re/apartments.2')</p>
        {{--<a href="{{ route('re.index') }}"><i class="fas fa-arrow-circle-left"></i> @lang('index.back') @lang('real_estate.title')</a>--}}

        <div class="embed-responsive embed-responsive-16by9 d-print-none">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uqN9rpuosGc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>



        <div class="row xs-mt-20">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/re/apartments/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/11.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4 xs-pt-10 lg-pt-0">
                <a href="{{ asset('images/re/apartments/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/12.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('re/apartments/ground.title')</h4>

                <p class="xs-mt-10">@lang('real_estate.1c', ['area' => 80, 'price' => '78 000'])</p>

                <a href="{{ route('re.apartments.ground') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="blue part">

        <div class="row bg_grey2">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/re/apartments/first/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/first/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4 xs-pt-10 lg-pt-0">
                <a href="{{ asset('images/re/apartments/first/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/first/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('re/apartments/first.title')</h4>

                <p class="xs-mt-10">@lang('real_estate.1c', ['area' => 100, 'price' => '&nbsp;112&nbsp;000'])</p>

                <a href="{{ route('re.apartments.first') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="blue part">

        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/re/apartments/penthouse/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/penthouse/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4 xs-pt-10 lg-pt-0">
                <a href="{{ asset('images/re/apartments/penthouse/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/re/apartments/penthouse/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('re/apartments/penthouse.title')</h4>

                <p class="xs-mt-10">@lang('real_estate.1c', ['area' => 225, 'price' => '168&nbsp;000'])</p>

                <a href="{{ route('re.apartments.penthouse') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20 bg_grey2">
        <div class="container">
            <h3>@lang('real_estate.plans')</h3>

            <div class="row">
                {{--<div class="col-12 col-lg-6">--}}
                    {{--<a href="{{ asset('images/re/apartments/plan.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/plan.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>--}}
                {{--</div>--}}

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/re/apartments/model1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/model1.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/re/apartments/model2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/model2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/re/apartments/model3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/model3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="container">
            <h3>@lang('real_estate.photos')</h3>

            <div class="row">

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/13.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/13.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/14.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/14.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/15.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/15.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/16.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/16.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/17.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/17.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/18.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/18.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/w1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/w1.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/w2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/w2.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/w3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/w3.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/w4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/sm/w4.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>
                </div>

            </div>
        </div>
    </div>

@endsection

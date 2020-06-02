@extends('public/_layout2')

@section('title')
    Šírava Park - @lang('real_estate.title')
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/re/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/re/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <div class="media">
                    <img class="mr-3" src="{{ asset('images/re/icon.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="title text-nowrap">@lang('real_estate.title')</h3>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">

        <div class="embed-responsive embed-responsive-16by9 my-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/so_piYwRz_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="row">

            <div class="col-12 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 d-print-none" data-aos="zoom-in">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uqN9rpuosGc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/houses/apartment_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/houses/sm/apartment_house.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('real_estate.h1')</h4>

                <p class="xs-mt-10">{!! trans('real_estate.1b') !!}</p>

                <a href="{{ route('re.apartments.index') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="part blue">

        <div class="row bg_grey2">

            <div class="col-12 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 d-print-none" data-aos="zoom-in">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/B89_22tXJRs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/houses/detached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/houses/sm/detached_house.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('real_estate.h2')</h4>

                <p class="xs-mt-10">{!! trans('real_estate.2b') !!}</p>

                <a href="{{ route('re.terraced') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="part blue">

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 d-print-none" data-aos="zoom-in">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7jW3kr6Y4B0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/houses/semidetached_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/houses/sm/semidetached_house.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('real_estate.h3')</h4>

                <p class="xs-mt-10">{!! trans('real_estate.3b') !!}</p>

                <a href="{{ route('re.semi') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="part blue">

        <div class="row bg_grey2">

            <div class="col-12 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 d-print-none" data-aos="zoom-in">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zYZuyRy9SbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/houses/standard_house.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/houses/sm/standard_house.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('real_estate.h4')</h4>

                <p class="xs-mt-10">{!! trans('real_estate.4b') !!}</p>

                <a href="{{ route('re.standard') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>

        <hr class="part blue">

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 d-print-none" data-aos="zoom-in">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lqKBdBR8YzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/houses/villa.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/houses/sm/villa.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <h4 class="xs-mt-20">@lang('real_estate.h5')</h4>

                <p class="xs-mt-10">{!! trans('real_estate.5b') !!}</p>

                <a href="{{ route('re.villas') }}" class="btn btn-blue xs-mb-20">@lang('index.moreInfo')</a>
            </div>
        </div>
    </div>
@endsection
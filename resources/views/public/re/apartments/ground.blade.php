@extends('public/_layout2')

@section('title')
    Šírava Park - Apartments - Ground floor
@endsection

@section('startBody')
    @component('components.reModalComponent', ['re' => 'Apartments - Ground floor'])@endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/re/apartments/ground/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/re/apartments/ground/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <h3 class="title">@lang('re/apartments/ground.title')</h3>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20">
        <a href="{{ route('re.apartments.index') }}"><i class="fas fa-arrow-circle-left"></i> @lang('index.back') @lang('re/apartments.title')</a>

        <div class="row xs-mt-20">
            <div class="col-12 col-lg-8">
                <p class="h3 text-uppercase col_blue text-shadow">@lang('re/apartments.subtitle')</p>

                {{--<p>@lang('re/apartments.1')</p>--}}

                <p>@lang('re/apartments.2')</p>
            </div>

            <div class="col-12 col-lg-4">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">@lang('real_estate.params')</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>@lang('real_estate.floorArea')</td>

                            <td>80 m<sup>2</sup> @lang('real_estate.inc')</td>
                        </tr>

                        <tr>
                            <td>@lang('real_estate.price')</td>

                            <td>&euro; 78 000</td>
                        </tr>
                    </tbody>
                </table>

                <a href="" class="btn btn-blue btn-block" data-toggle="modal" data-target="#rmiModal">@lang('real_estate.rmi')</a>

                @if(file_exists('documents/Ground_floor_apartments_'   . App::getLocale() . '.pdf'))
                <a href="{{ asset('documents/Ground_floor_apartments_' . App::getLocale() . '.pdf') }}" target="_blank" class="btn btn-success btn-block">@lang('real_estate.rmi2')</a>
                @else
                    <a href="{{ asset('documents/Ground_floor_apartments_en.pdf') }}" target="_blank" class="btn btn-success btn-block">@lang('real_estate.rmi2')</a>
                @endif

            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20 bg_grey2">
        <div class="container">
            <h3>@lang('re/apartments.out')</h3>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/outdoor1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/outdoor1.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/outdoor2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/outdoor2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                {{--<div class="col-12 col-lg-6">--}}
                    {{--<a href="{{ asset('images/re/apartments/ground/outdoor3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/outdoor3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>--}}
                {{--</div>--}}

                {{--<div class="col-12 col-lg-6">--}}
                    {{--<a href="{{ asset('images/re/apartments/ground/outdoor4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/outdoor4.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20">
        <div class="container">
            <h3>@lang('real_estate.plans')</h3>

            <div class="row">
                {{--<div class="col-12 col-lg-4">--}}
                    {{--<a href="{{ asset('images/re/apartments/ground/plan1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/plan1.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>--}}
                {{--</div>--}}

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/plan3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/plan3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/plan2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/sm/plan2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    {{--Flat No. 1--}}
    <div class="xs-pt-20 xs-pb-20 lg-pb-50 bg_grey2">
        <div class="container">
            <h3>@lang('re/apartments.in-flat1')</h3>

            {{--Panorama view--}}
            <div class="mt-1 mb-2 embed-responsive embed-responsive-16by9 panorama">
                <iframe src='https://roundme.com/embed/432680' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat1/5.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat1/sm/5.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat1/6.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat1/sm/6.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat1/8.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat1/sm/8.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat1/9.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat1/sm/9.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    {{--Flat No. 2--}}
    <div class="xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="container">
            <h3>@lang('re/apartments.in-flat2')</h3>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat2/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat2/sm/2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat2/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat2/sm/3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat2/7.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat2/sm/7.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat2/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat2/sm/4.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                {{--<div class="col-12 col-lg-6">--}}
                    {{--<a href="{{ asset('images/re/apartments/ground/flat2/9.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat2/sm/9.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>

    {{--Flat No. 3--}}
    <div class="xs-pt-20 xs-pb-20 lg-pb-50 bg_grey2">
        <div class="container">
            <h3>@lang('re/apartments.in-flat3')</h3>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat3/1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat3/sm/1.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat3/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat3/sm/3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat3/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat3/sm/4.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/apartments/ground/flat3/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/apartments/ground/flat3/sm/2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

            </div>
        </div>
    </div>


@endsection
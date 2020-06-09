@extends('layout._layout2')

@section('title')
    Šírava Park - @lang('re/terraced.title')
@endsection

@section('startBody')
    @component('components.reModalComponent', ['re' => 'Terraced houses'])@endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/re/terraced/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/re/terraced/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <h3 class="title">@lang('re/terraced.title')</h3>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20">
        <div class="row">
            <div class="col-12 col-lg-8">
                <p class="h3 text-uppercase col_blue text-shadow">@lang('re/terraced.subtitle')</p>

                <p>@lang('re/terraced.1')</p>

                <p>@lang('re/terraced.2')</p>
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
                            <td>@lang('real_estate.plotArea')</td>

                            <td>124 - 155 m<sup>2</sup></td>
                        </tr>

                        <tr>
                            <td>@lang('real_estate.floorArea')</td>

                            <td>104 m<sup>2</sup></td>
                        </tr>

                        <tr>
                            <td>@lang('real_estate.price')</td>

                            <td>&euro; 122 000</td>
                        </tr>
                    </tbody>
                </table>

                <a href="" class="btn btn-blue btn-block" data-toggle="modal" data-target="#rmiModal">@lang('real_estate.rmi')</a>
                @if(file_exists('documents/Terraced_houses_'   . App::getLocale() . '.pdf'))
                <a href="{{ asset('documents/Terraced_houses_'   . App::getLocale() . '.pdf') }}" target="_blank" class="btn btn-success btn-block">@lang('real_estate.rmi2')</a>
                @else
                    <a href="{{ asset('documents/Terraced_houses_en.pdf') }}" target="_blank" class="btn btn-success btn-block">@lang('real_estate.rmi2')</a>
                @endif
            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20 bg_grey2">
        <div class="container">
            <h3>@lang('real_estate.photos')</h3>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/sm/1.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/sm/2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/sm/3.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/sm/4.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="container">
            <h3>@lang('real_estate.plans')</h3>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/plan.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/sm/plan.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/plans/plan2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/re/terraced/plans/sm/plan2.jpg') }}" class="img-fluid d-block xs-mb-10" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    <div class="xs-pt-20 xs-pb-20 lg-pb-50 bg_grey2">
        <div class="container">
            <h3>@lang('re/apartments.in')</h3>

            {{--Panorama view--}}
            <div class="mt-1 mb-2 embed-responsive embed-responsive-16by9 panorama">
                <iframe src='https://roundme.com/embed/434424' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/d.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/d.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/c.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/c.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/f.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/f.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/b.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/b.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/e.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/e.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/re/terraced/indoor/a.jpg') }}" target="_blank" data-lightbox="photos">
                        <img src="{{ asset('images/re/terraced/indoor/sm/a.jpg') }}" class="img-fluid d-block xs-mb-10" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

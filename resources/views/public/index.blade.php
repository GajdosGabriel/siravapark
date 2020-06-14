@extends('layouts.app2')

{{--@section('otherMeta')--}}
{{--    <meta property="og:url"                content="{{ env('APP_URL') }}" />--}}
{{--    <meta property="og:type"               content="article" />--}}
{{--    <meta property="og:title"              content="Šírava Park Lake Resort" />--}}
{{--    <meta property="og:description"        content="Šírava Park is situated in East Slovakia in most desirable location, creating spectacular water estate community." />--}}
{{--    <meta property="og:image"              content="{{ asset('images/carousel/1.jpg') }}" />--}}
{{--@endsection--}}

@section('content')

    @include('public.carousel.carousel')

    {{-- Boulevard --}}
    <div id="featuresBlock" class="pageBlock">
        <div class="container">
            <header class="blockHeader flex justify-center" data-aos="zoom-in">
                <div class="line"></div>

                <div class="flex items-center bg-white z-10 px-4">
                    <img class="mr-4" src="{{ asset('images/icons/social_area.png') }}" alt="">

                    <div class="">
                        <h3 class="col_blue">@lang('boulevard.title2')</h3>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-3 md:grid-cols-4 gap-6 mt-4 mb-2 sm:w-4/6 mx-auto">
                <div class="">
                    <img src="{{ asset('images/icons/p2.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('boulevard.1')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/p4.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('boulevard.2')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/sa3.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('boulevard.3')</p>
                </div>

                <div class="hidden md:block">
                    <img src="{{ asset('images/icons/sa4.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('boulevard.4')</p>
                </div>
            </div>

            {{--            <div class="row icons xs-mt-20">--}}
            {{--                <div class="col-4 col-md-3">--}}
            {{--                    <img src="{{ asset('images/icons/p2.png') }}" class="img-fluid d-block mx-auto" alt="">--}}
            {{--                    <p class="text-center xs-mt-10">@lang('boulevard.1')</p>--}}
            {{--                </div>--}}

            {{--                <div class="col-4 col-md-3">--}}
            {{--                    <img src="{{ asset('images/icons/p4.png') }}" class="img-fluid d-block mx-auto" alt="">--}}
            {{--                    <p class="text-center xs-mt-10">@lang('boulevard.2')</p>--}}
            {{--                </div>--}}

            {{--                <div class="col-4 col-md-3">--}}
            {{--                    <img src="{{ asset('images/icons/sa3.png') }}" class="img-fluid d-block mx-auto" alt="">--}}
            {{--                    <p class="text-center xs-mt-10">@lang('boulevard.3')</p>--}}
            {{--                </div>--}}

            {{--                <div class="d-none d-md-block col-4 col-md-3">--}}
            {{--                    <img src="{{ asset('images/icons/sa4.png') }}" class="img-fluid d-block mx-auto" alt="">--}}
            {{--                    <p class="text-center xs-mt-10">@lang('boulevard.4')</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

        <div id="featuresPic" class="pic negativeMargin">
            <footer class="bottom text-center">
                <a href="{{ route('beachClub') }}" class="btn btn-blue rounded-md">@lang('index.moreInfo')</a>
            </footer>
        </div>
    </div>


    {{-- Glamping session --}}
    <div id="realEstateBlock" class="pageBlock">

        <div class="container">
            <header class="blockHeader flex justify-center" data-aos="zoom-in">
                <div class="line"></div>

                <div class="flex items-center bg-white z-10 px-4">
                    <img class="mr-4" src="{{ asset('images/icons/glamping.png') }}" alt="">

                    <div class="">
                        <h3 class="col_blue">@lang('index.glamping')</h3>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-3 md:grid-cols-4 gap-6 mt-4 mb-2 sm:w-4/6 mx-auto">
                <div class="">
                    <img src="{{ asset('images/icons/accommodation.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('index.glamping-accommodation')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/service.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('index.glamping-servis')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/breakfast.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('index.glamping-breakfast')</p>
                </div>

                <div class="hidden md:block">
                    <img src="{{ asset('images/icons/domes.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('index.glamping-domes')</p>
                </div>

            </div>
        </div>


        <div id="siravaPic" class="pic negativeMargin">
            <footer class="bottom text-center">
                <a href="{{ route('sirava-park') }}" class="btn btn-blue rounded-md">@lang('index.moreInfo')</a>
            </footer>
        </div>
    </div>

    {{-- Apartmants session --}}
    {{--  @include('public.re.apartments.front')--}}

    {{--    <div id="spaBlock" class="pageBlock"></div>--}}

    <div id="locationBlock" class="container pageBlock xs-mb-20 lg-mb-50">
        <div class="container">
            <header class="blockHeader flex justify-center" data-aos="zoom-in">
                <div class="line"></div>

                <div class="flex items-center bg-white z-10 px-4">
                    <img class="mr-4" src="{{ asset('images/icons/location.png') }}" alt="">

                    <h3 class="col_blue">@lang('index.location')</h3>
                </div>
            </header>


            <div class="grid grid-cols-3 md:grid-cols-4 gap-6 mt-4 mb-2 sm:w-4/6 mx-auto">
                <div class="">
                    <img src="{{ asset('images/icons/hiking.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('location.hiking')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/biking.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('location.biking')</p>
                </div>

                <div class="">
                    <img src="{{ asset('images/icons/skiing.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('location.skiing')</p>
                </div>

                <div class="hidden md:block">
                    <img src="{{ asset('images/icons/wine-trips.png') }}"
                         class="w-20 mx-auto hover:border-gray-400 p-2 border-2 rounded-md" alt="">
                    <p class="text-center py-3 text-sm uppercase font-semibold text-gray-600">@lang('location.wine')</p>
                </div>

            </div>

            <p class="text-center text-lg font-semibold text-gray-700 mt-2 mb-8 ">@lang('index.text')</p>

            <img src="{{ asset('images/location.jpg') }}" class="" alt="Location">

            <div class="text-lg-center lg-mt-20 mt-4 flex justify-center items-center">
                <a href="{{ route('location') }}" class="btn btn-blue rounded-md">@lang('index.moreInfo')</a>
            </div>
        </div>
    </div>


@endsection

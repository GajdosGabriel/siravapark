@extends('layouts.app')

{{--@section('otherMeta')--}}
{{--    <meta property="og:url"                content="{{ env('APP_URL') }}" />--}}
{{--    <meta property="og:type"               content="article" />--}}
{{--    <meta property="og:title"              content="Šírava Park Lake Resort" />--}}
{{--    <meta property="og:description"        content="Šírava Park is situated in East Slovakia in most desirable location, creating spectacular water estate community." />--}}
{{--    <meta property="og:image"              content="{{ asset('images/carousel/1.jpg') }}" />--}}
{{--@endsection--}}

@section('content')
    <div id="homeBlock" class="pageBlock">
        <div id="carouselMain" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block d-md-none w-100" src="{{ asset('images/carousel/1sm.jpg') }}" alt="">
                    <img class="d-none d-md-block w-100" src="{{ asset('images/carousel/1.jpg') }}" alt="">

                    <div class="carousel-caption">
                        @include('includes/carousel_caption')
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block d-md-none w-100" src="{{ asset('images/carousel/2sm.jpg') }}" alt="">
                    <img class="d-none d-md-block w-100" src="{{ asset('images/carousel/2.jpg') }}" alt="">

                    <div class="carousel-caption">
                        @include('includes/carousel_caption')
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{------------- Boulevard -----------------------}}
    <div id="featuresBlock" class="container-fluid pageBlock">
        <div class="container">
            <header class="blockHeader" data-aos="zoom-in">
                <div class="line"></div>

                <div class="media">
                    <img class="mr-3" src="{{ asset('images/icons/social_area.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="col_blue xs-mb-0 xs-mt-5">@lang('boulevard.title2')</h3>
                    </div>
                </div>
            </header>

            <div class="row icons xs-mt-20">
                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/p2.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('boulevard.1')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/p4.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('boulevard.2')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/sa3.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('boulevard.3')</p>
                </div>

                <div class="d-none d-md-block col-4 col-md-3">
                    <img src="{{ asset('images/icons/sa4.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('boulevard.4')</p>
                </div>
            </div>
        </div>

        <div id="featuresPic" class="pic negativeMargin">
            <footer class="bottom">
                <a href="{{ route('beachClub') }}" class="btn btn-blue">@lang('index.moreInfo')</a>
            </footer>
        </div>
    </div>


    {{-- Glamping session --}}
    <div id="realEstateBlock" class="container-fluid pageBlock">

        <div class="container">
            <header class="blockHeader" data-aos="zoom-in">
                <div class="line"></div>

                <div class="media">
                    <img class="mr-3" src="{{ asset('images/icons/glamping.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="col_blue xs-mb-0 xs-mt-5">@lang('index.glamping')</h3>
                    </div>
                </div>
            </header>

            <div class="row icons xs-mt-20">

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/accommodation.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('index.glamping-accommodation')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/service.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('index.glamping-servis')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/breakfast.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('index.glamping-breakfast')</p>
                </div>

                <div class="d-none d-md-block col-4 col-md-3">
                    <img src="{{ asset('images/icons/domes.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('index.glamping-domes')</p>
                </div>
            </div>
        </div>


        <div id="siravaPic" class="pic negativeMargin">
            <footer class="bottom">
                <a href="{{ route('sirava-park') }}" class="btn btn-blue">@lang('index.moreInfo')</a>
            </footer>
        </div>
    </div>

    {{-- Apartmants session --}}
    {{--
   <div id="realEstateBlock" class="container-fluid pageBlock">
       <div class="container">
           <header class="blockHeader" data-aos="zoom-in">
               <div class="line"></div>

               <div class="media">
                   <img class="mr-3" src="{{ asset('images/icons/real_estate.png') }}" alt="">

                   <div class="media-body">
                       <h3 class="col_blue xs-mb-0 xs-mt-5">@lang('index.apartments')</h3>
                   </div>
               </div>
           </header>

           <div class="row icons xs-mt-20">
               <div class="col-4 col-md-3">
                   <img src="{{ asset('images/icons/re1.png') }}" class="img-fluid d-block mx-auto" alt="">
                   <p class="text-center xs-mt-10">@lang('index.1')</p>
               </div>

               <div class="col-4 col-md-3">
                   <img src="{{ asset('images/icons/re3.png') }}" class="img-fluid d-block mx-auto" alt="">
                   <p class="text-center xs-mt-10">@lang('index.3')</p>
               </div>

               <div class="col-4 col-md-3">
                   <img src="{{ asset('images/icons/re2.png') }}" class="img-fluid d-block mx-auto" alt="">
                   <p class="text-center xs-mt-10">@lang('index.2')</p>
               </div>

               <div class="d-none d-md-block col-4 col-md-3">
                   <img src="{{ asset('images/icons/re4.png') }}" class="img-fluid d-block mx-auto" alt="">
                   <p class="text-center xs-mt-10">@lang('index.4')</p>
               </div>
           </div>
       </div>

       <div id="realEstatePic" class="pic negativeMargin">
           <footer class="bottom">
               <a href="{{ route('re.apartments.index') }}" class="btn btn-blue">@lang('index.moreInfo')</a>
           </footer>
       </div>
   </div>
   --}}


    <div id="spaBlock" class="container-fluid pageBlock"></div>

    <div id="locationBlock" class="container-fluid pageBlock xs-mb-20 lg-mb-50">
        <div class="container">
            <header class="blockHeader" data-aos="zoom-in">
                <div class="line"></div>

                <div class="media">
                    <img class="mr-3" src="{{ asset('images/icons/location.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="col_blue xs-mb-0 xs-mt-5">@lang('index.location')</h3>
                    </div>
                </div>
            </header>


            <div class="row icons xs-mt-20">
                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/hiking.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('location.hiking')</p>
                </div>

                <div class="d-none d-md-block col-4 col-md-3">
                    <img src="{{ asset('images/icons/biking.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('location.biking')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/skiing.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('location.skiing')</p>
                </div>

                <div class="col-4 col-md-3">
                    <img src="{{ asset('images/icons/wine-trips.png') }}" class="img-fluid d-block mx-auto" alt="">
                    <p class="text-center xs-mt-10">@lang('location.wine')</p>
                </div>
            </div>

            <p class="lead text-center xs-mt-20 xs-mb-20">@lang('index.text')</p>

            <img src="{{ asset('images/location.jpg') }}" class="img-fluid d-block mx-auto" alt="">

            <div class="text-right text-lg-center lg-mt-20">
                <a href="{{ route('location') }}" class="btn btn-blue">@lang('index.moreInfo')</a>
            </div>
        </div>
    </div>

    {{-- Prihlasovanie len moje skúšobné --}}

    {{--@if(config('app.env') == 'local')--}}
        {{--@if(Auth::guest())--}}
        {{--<div class="container-fluid pageBlock xs-mb-20 lg-mb-50">--}}
            {{--<div class="container">--}}

                {{--<header class="blockHeader" data-aos="zoom-in">--}}
                    {{--<div class="line"></div>--}}

                    {{--<div class="media">--}}
                        {{--<img class="mr-3" src="{{ asset('images/icons/location.png') }}" alt="">--}}

                        {{--<div class="media-body">--}}
                            {{--<h3 class="col_blue xs-mb-0 xs-mt-5">@lang('index.location')</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</header>--}}

                {{--<p class="lead text-center xs-mt-20 xs-mb-20">By a member</p>--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6 mb-1">--}}
                            {{--<a class="btn btn-blue btn-block" href="" data-toggle="modal"--}}
                               {{--data-target="#loginModal">@lang('public/nav.logIn')</a>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6">--}}
                            {{--<a class="btn btn-blue btn-block" href="" data-toggle="modal"--}}
                                {{--data-target="#registerModal">@lang('public/nav.signUp')</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@endif--}}
    {{--@endif--}}


@endsection

@extends('layouts.app2')

@section('title') Šírava Park - Boulevard @endsection

@section('otherMeta')
    <meta property="og:url"                content="{{ env('APP_URL') . '/boulevard' }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Šírava Park Boulevard" />
    <meta property="og:description"        content="Šírava Park is situated in East Slovakia in most desirable location, creating spectacular water estate community." />
    <meta property="og:image"              content="{{ asset('images/boulevard/cover-summer1.jpg') }}" />
@endsection


@section('startBody')
    @component('components.reModalComponent', ['re' => 'Boulevard info required'])@endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            {{--<img src="{{ asset('images/boulevard/cover_sm-winter.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">--}}
            {{--<img src="{{ asset('images/boulevard/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">--}}

            <img src="{{ asset('images/boulevard/cover_sm-summer.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/boulevard/cover-summer.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <div class="media">
{{--                    <img class="mr-3" src="{{ asset('images/icon.png') }}" alt="">--}}

                    <div class="media-body">
                        <h3 class="title">@lang('boulevard.title')&nbsp;2021</h3>
                    </div>
                </div>
            </div>
        </header>
    </div>


    {{--// Video--}}
    <div class="container mt-4">
        <p>@lang('boulevard.videoText')</p>
        <div class="embed-responsive embed-responsive-16by9 d-print-none">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tcwPQTDt8tY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="mt-3">
        <a href="{{ asset('images/sp/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/4.jpg') }}" class="img-fluid d-block rounded-md" alt=""></a>
        </div>

        {{--Panorama view--}}
        {{-- <div class="mt-3 embed-responsive embed-responsive-16by9 panorama">
            <iframe src='https://roundme.com/embed/466735/1604007' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        --}}

        {{-- Modal form--}}
        {{--<div class="text-center mt-3">--}}
            {{--<p>@lang('boulevard.leadText')</p>--}}
            {{--<a href="#" class="btn btn-blue col-md-4" data-toggle="modal" data-target="#rmiModal">@lang('real_estate.rmi')</a>--}}
        {{--</div>--}}

    </div>


    <div class="container mx-auto">
        {{--<h3 class="text-center col_blue xs-mt-20">Šírava Park Boulevard</h3>--}}

        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">


            <div class="">
                <a href="{{ asset('images/boulevard/v2.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v2.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v3.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v3.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v4.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v4.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v5.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v5.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v6.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v6.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v7.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v7.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v8.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v8.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v9.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v9.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>


            <div class="">
                <a href="{{ asset('images/boulevard/v10.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v10.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v11.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v11.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v12.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v12.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v13.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v13.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v14.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v14.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>


            <div class="">
                <a href="{{ asset('images/boulevard/v16.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v16.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v17.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v17.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v18.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v18.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v19.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v19.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>

            <div class="">
                <a href="{{ asset('images/boulevard/v20.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/boulevard/sm/v20.jpg') }}" class="rounded-sm" alt="">
                </a>
            </div>


        </div>

    </div>

@endsection


@extends('public/_layout2')

@section('title') Šírava Park - Glamping @endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            {{--<img src="{{ asset('images/sp/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">--}}
            {{--<img src="{{ asset('images/sp/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">--}}

            <img src="{{ asset('images/sp/cover_sm-summer.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/sp/cover-summer.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <h3 class="title">Glamping 2021</h3>
            </div>

        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <p>@lang('glamping.1')</p>
        <p class="d-none d-md-block">@lang('glamping.2')</p>

        @include('includes/videos/park')

        <div class="mt-3">
            <a href="{{ asset('images/sp/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/4.jpg') }}" class="img-fluid d-block" alt=""></a>
        </div>


        {{--<p class="xs-mt-20">@lang('glamping.3')</p>--}}
        {{--<p class="xs-mt-20">@lang('glamping.4')</p>--}}


        {{--Panorama view--}}
        {{--<div class="mt-4 mb-3">--}}
            {{--<iframe width='100%' height='720' src='https://roundme.com/embed/431542/1472358' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
        {{--</div>--}}

        {{--@if(in_array(App::getLocale(), ['cz', 'sk']))--}}
            {{--<a href="{{ asset('images/sp/arch_sk.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/arch_sk.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>--}}
        {{--@else--}}
            {{--<a href="{{ asset('images/sp/arch_en.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/arch_en.jpg') }}" class="img-fluid d-block xs-mb-20" alt=""></a>--}}
        {{--@endif--}}

{{--        <a href="{{ asset('images/sp/arch.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/arch.jpg') }}" class="img-fluid d-block" alt=""></a>--}}


   {{--Panorama view--}}
        {{--
<div class="mt-4 mb-1 embed-responsive embed-responsive-16by9 panorama">
    {{--<iframe  src='https://seekbeak.com/v/0ogzwZ9e1E9' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
        {{--   <iframe  src='https://roundme.com/embed/504619' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
--}}
        {{--
               <div class="row">

                   <div class="col-12 col-lg-6">
                       <a href="{{ asset('images/sp/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
                   </div>

                   <div class="col-12 col-lg-6">
                       <a href="{{ asset('images/sp/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/sp/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
                   </div>

               </div>


        <h3 class="text-center col_blue xs-mt-20 lg-mt-50">@lang('glamping.6')</h3>
 --}}
        <div class="row">

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v1.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v1.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>


            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v2.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v2.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v3.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v3.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v4.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v4.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v5.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v5.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v6.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v6.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v7.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v7.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v8.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v8.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v9.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v9.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v10.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v10.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v11.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v11.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v12.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v12.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v13.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v13.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v14.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v14.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v15.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v15.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v16.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v16.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v17.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v17.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v18.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v18.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v19.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v19.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v20.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v20.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v21.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v21.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v22.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v22.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v23.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v23.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/sp/v24.jpg') }}" target="_blank" data-lightbox="photos">
                    <img src="{{ asset('images/sp/sm/v24.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>


        </div>

        {{--
        <h3 class="text-center col_blue xs-mt-20 lg-mt-50">@lang('glamping.5')</h3>

        <div class="row">

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/31.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/31.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/32.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/32.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/35.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/35.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>



            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/33.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/33.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/34.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/34.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/a.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/a.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>



            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/b.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/b.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/c.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/c.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/d.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/d.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>


            <div class="col-12 col-lg-6">
                <a href="{{ asset('images/features/plan_floor1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/plan_floor1.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-6">
                <a href="{{ asset('images/features/plan_floor2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/sm/plan_floor2.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

        </div>
        --}}

    </div>
@endsection

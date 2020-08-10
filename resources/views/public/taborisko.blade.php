@extends('layouts.app2')

@section('title') Šírava Park - Táborisko @endsection

{{--@section('otherMeta')--}}
{{--    <meta property="fb:app_id" content="635761010104591"/>--}}
{{--    <meta property="og:url"                content="{{ env('APP_URL') . '/taborisko' }}" />--}}
{{--    <meta property="og:type"               content="article" />--}}
{{--    <meta property="og:title"              content="Šírava Park Taborisko" />--}}
{{--    <meta property="og:description"        content="Šírava Park is situated in East Slovakia in most desirable location, creating spectacular water estate community." />--}}
{{--    <meta property="og:image"              content="{{ asset('images/taborisko/cover.png') }}" />--}}
{{--    <meta property="og:image:width" content="1304" />--}}
{{--    <meta property="og:image:height" content="400" />--}}
{{--    <meta property="og:image:alt" content="Táborisko place" />--}}
{{--@endsection--}}



@section('content')
    @include('includes/modals/holidayFormModal')
    <div class="container-fluid">
        <header class="pageHeader" style="position: relative">

            <div id="carouselMain" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/taborisko/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
                        <img src="{{ asset('images/taborisko/cover.png') }}" style="width: 100%" class="img-fluid d-none d-lg-block mx-auto" alt="">

                        <div class="carousel-caption">
                            @include('public.carousel.carousel_caption-taborisko')
                        </div>
                    </div>
                </div>
            </div>

            {{-- Title  --}}
            <div class="text">
                <div class="media">
                    <div class="media-body">
                        <h3 class="title">@lang('public/taborisko.title')&nbsp;2020</h3>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="container mx-auto py-6">
        <p>@lang('public/taborisko.text1')</p>

        {{--<p class="d-none d-md-block">@lang('location.2')</p>--}}

{{--        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">--}}
{{--            <div>--}}
{{--                <a href="{{ asset('images/taborisko/taborisko1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko1.jpg') }}" class="rounded-sm w-full" alt="" data-aos="zoom-in"></a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="{{ asset('images/taborisko/taborisko2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko2.jpg') }}" class="rounded-sm w-full" alt="" data-aos="zoom-in"></a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="{{ asset('images/taborisko/taborisko3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko3.jpg') }}" class="rounded-sm w-full" alt="" data-aos="zoom-in"></a>--}}
{{--            </div>--}}

{{--        </div>--}}



        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">
            <div class="overflow-hidden" >
                <a href="{{ asset('images/taborisko/taborisko39.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko39.jpg') }}" class="rounded-sm w-full"  alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko40.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko40.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko41.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko41.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

        </div>

        <p class="xs-mt-20">@lang('public/taborisko.text2')</p>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">
            <div class="overflow-hidden " >
                <a href="{{ asset('images/taborisko/taborisko36.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko36.jpg') }}" class="rounded-sm w-full"  alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko37.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko37.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko38.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko38.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

        </div>

        <p>@lang('public/taborisko.text3')</p>


        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">
            <div class="overflow-hidden " >
                <a href="{{ asset('images/taborisko/taborisko42.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko42.jpg') }}" class="rounded-sm w-full"  alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko43.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko43.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

            <div class="overflow-hidden">
                <a href="{{ asset('images/taborisko/taborisko44.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko44.jpg') }}" class="rounded-sm w-full" alt=""></a>
            </div>

        </div>



        <div class="my-8">
            <div class="overflow-hidden" >
                <a href="{{ asset('images/taborisko/stand_up_comedy.png') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/stand_up_comedy.png') }}" class="rounded-sm w-full"  alt=""></a>
            </div>

        </div>


        <div class="embed-responsive embed-responsive-16by9 d-print-none">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MmpYvyI1cd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <p class="mt-4">@lang('public/taborisko.text4')</p>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 my-8">
            <div class="">
                <a href="{{ asset('images/taborisko/taborisko4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko4.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko5.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko5.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko6.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko6.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

        </div>


        <h3 class="mt-4 font-semibold text-lg uppercase tracking-wider">@lang('public/taborisko.activity3')</h3>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 mt-6">
            <div class="">
                <a href="{{ asset('images/taborisko/taborisko16.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko16.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko17.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko17.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko18.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko18.jpg') }}" class="rounded-sm" alt=""></a>
            </div>
        </div>

        <h3 class="mt-4 font-semibold text-lg uppercase tracking-wider">@lang('public/taborisko.activity1')</h3>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 mt-6">
            <div class="">
                <a href="{{ asset('images/taborisko/taborisko22.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko22.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko23.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko23.jpg') }}" class="rounded-sm" alt=""></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko12.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko12.jpg') }}" class="rounded-sm" alt=""></a>
            </div>
        </div>



        <h3 class="mt-4 font-semibold text-lg uppercase tracking-wider">@lang('public/taborisko.activity2')</h3>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-6 mt-6 mb-8">
            <div class="">
                <a href="{{ asset('images/taborisko/taborisko13.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko13.jpg') }}" class="rounded-sm" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko14.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko14.jpg') }}" class="rounded-sm" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="">
                <a href="{{ asset('images/taborisko/taborisko15.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/sm/taborisko15.jpg') }}" class="rounded-sm" alt="" data-aos="zoom-in"></a>
            </div>

        </div>



        {{--  Google map   --}}
{{--        <div class="embed-responsive embed-responsive-16by9 d-print-none xs-mt-20">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d37497.43764775952!2d21.976342452157446!3d48.79273176433241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d48.811292599999994!2d22.041712699999998!4m0!5e0!3m2!1sen!2ssk!4v1545398277418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--        </div>--}}

        {{--  Site plan   --}}
        <a href="{{ asset('images/taborisko/siteplan_camping_'. App::getLocale() .'.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/taborisko/siteplan_camping_'. App::getLocale() .'.jpg') }}" class="rounded-sm" alt=""></a>


        <div class="text-center mt-4">
            <button type="submit" class="btn btn-blue mr-2 mt-3" data-toggle="modal" data-target="#taborisko-price_list">@lang('public/taborisko.price_list')</button>
            <button type="submit" class="btn btn-blue ml-2 mt-3" data-toggle="modal" data-target="#contactModal">@lang('public/taborisko.check_availability')</button>
            <button type="submit" class="btn btn-blue ml-2 mt-3" data-toggle="modal" data-target="#faqModal">@lang('legal/taborisko-faq.link_button')</button>
            <button type="submit" class="btn btn-blue ml-2 mt-3" data-toggle="modal" data-target="#taborisko-covid_warning">COVID-19</button>
        </div>

        @include('public.modals.taborisko-pricelistModal')
        @include('public.modals.contactModal')
        @include('public.modals.taborisko-faqModal')
        @include('public.modals.taborisko-covid-warningModal')


    </div>
@endsection


{{--On begening popup for covid-19--}}
{{--@section('addJS')--}}
{{--    <script type="text/javascript">--}}
{{--        $(window).on('load',function(){--}}
{{--            $('#taborisko-covid_warning').modal('show');--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}

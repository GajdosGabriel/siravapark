@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Contact us')

@section('startBody')
    @include('member/modals/contactModal')
@endsection

@section('content')
    <div class="container xs-mt-20 xs-mb-20 lg-mb-50">
        <h2 class="header-lg font-pt-serif text-center xs-mb-20">@lang('public/contact.touch')</h2>

        <div class="row">
            <div class="col-12 col-lg-4">
                <p class="h4 text-center">@lang('public/contact.head')</p>

                <img src="{{ asset('images/pub/contact/3.jpg') }}" class="img-fluid w-100" alt="">

                <h4 class="xs-mt-20">Bratislava, Slovak Republic</h4>

                <address>
                    <span class="color_primary">@lang('public/contact.address'):</span> Gorkého 5, Bratislava, 81101<br>

                    <span class="color_primary">@lang('public/contact.phone'):</span> +421 (0)2 207 001 55<br>

                    <span class="color_primary">E-mail:</span> <a href="mailto:info@cee-realestate.com">info@cee-realestate.com</a><br>

                    <span class="color_primary">@lang('public/contact.company'):</span> 52 028 461<br>

                    <span class="color_primary">@lang('public/contact.lei'):</span> 097900BIHN0000163735<br>
                </address>
            </div>

            <div class="col-12 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.307614035379!2d17.10839801605989!3d48.14287447922383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c894f9dbd6657%3A0xf2a600749239002f!2sCEE+Real+Estate+Group+sro!5e0!3m2!1sen!2ssk!4v1538477368869" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{--<div class="row lg-mt-50">--}}
            {{--<div class="col-12 col-lg-4 xs-pt-50 lg-pt-0">--}}
                {{--<h4>Prague, Czech Republic</h4>--}}

                {{--<address class="cee xs-mb-20">--}}
                    {{--<span class="color_primary">@lang('public/contact.address'):</span> Ovocný trh 572/11, Prague, 11000<br>--}}

                    {{--<span class="color_primary">@lang('public/contact.phone'):</span> +420 228 882 107<br>--}}
                {{--</address>--}}

                {{--<img src="{{ asset('images/pub/contact/1.jpg') }}" class="img-fluid w-100" alt="">--}}

                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.9739772665866!2d14.422581016113172!3d50.08677407942681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94eb9443438b%3A0xc64ed9637c66f726!2zT3ZvY27DvSB0cmggNTcyLzExLCAxMTAgMDAgU3RhcsOpIE3Em3N0bywgQ3plY2hpYQ!5e0!3m2!1sen!2ssk!4v1538476994927" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-lg-4 xs-pt-50 lg-pt-0">--}}
                {{--<h4>Vienna, Austria</h4>--}}

                {{--<address class="cee xs-mb-20">--}}
                    {{--<span class="color_primary">@lang('public/contact.address'):</span> Tuchlauben 7a, Vienna, 1010<br>--}}

                    {{--<span class="color_primary">@lang('public/contact.phone'):</span> +43 720 116 303<br>--}}
                {{--</address>--}}

                {{--<img src="{{ asset('images/pub/contact/2.jpg') }}" class="img-fluid w-100" alt="">--}}

                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.8045295330135!2d16.36727521606174!3d48.21038087922947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07988465c083%3A0x4ca80a7374bd835a!2sTuchlauben+7A%2C+1010+Wien%2C+Austria!5e0!3m2!1sen!2ssk!4v1538477169014" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-lg-4 xs-pt-50 lg-pt-0">--}}
                {{--<h4>Budapest, Hungary</h4>--}}

                {{--<address class="cee xs-mb-20">--}}
                    {{--<span class="color_primary">@lang('public/contact.address'):</span> B-Zsilinszky út 48, Budapest, 1054<br>--}}

                    {{--<span class="color_primary">@lang('public/contact.phone'):</span> +36 19 989 294<br>--}}
                {{--</address>--}}

                {{--<img src="{{ asset('images/pub/contact/4.jpg') }}" class="img-fluid w-100" alt="">--}}

                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.2343062256195!2d19.052458316042777!3d47.50482797917805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc134831dc1d%3A0xba6a238487f9ae8b!2sBudapest%2C+Bajcsy-Zsilinszky+%C3%BAt+48%2C+1054+Hungary!5e0!3m2!1sen!2ssk!4v1538477235052" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="text-center xs-mt-20 xs-mb-20 lg-mt-50">
            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#contactModal">@lang('public/contact.send')</a>
        </div>
    </div>
@endsection
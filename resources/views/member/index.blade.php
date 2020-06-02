@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area')

@section('startBody')
    @include('member/modals/mixedModal')
@endsection

@section('content')

    <div class="container">
        <h3 style="height: 80vh">Member landing page</h3>
    </div>

    {{--<div class="container-fluid">--}}
        {{--<div id="memberIndex" class="row bgAlternate">--}}
            {{--<div id="sirava" class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<div class="media xs-mb-20">--}}
                        {{--<img class="mr-3" src="{{ asset('images/member/icon_land.png') }}" alt="">--}}

                        {{--<div class="media-body align-self-center">--}}
                            {{--<p class="h3 font-montserrat font-weight-bold color_white text-shadow">@lang('member/index.1')</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<p class="color_white text-shadow">@lang('member/index.1b')</p>--}}

                    {{--<a href="{{ route('member.sirava.why_invest') }}" class="btn btn-primary" data-aos="fade-right" data-aos-delay="500">@lang('general.more')</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<div class="media xs-mb-20">--}}
                        {{--<img class="mr-3" src="{{ asset('images/member/icon_developments.png') }}" alt="">--}}

                        {{--<div class="media-body align-self-center">--}}
                            {{--<p class="h3 font-montserrat">@lang('member/index.2')</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<p>@lang('member/index.2b')</p>--}}

                    {{--<div class="moreButtons">--}}
                        {{--<a href="{{ route('member.sirava.master_plan') }}" class="btn btn-secondary" data-aos="fade-right" data-aos-delay="500">@lang('general.more')</a>--}}

                        {{--<a href="{{ route('member.sirava.beach_mp') }}" class="btn btn-secondary" data-aos="fade-right" data-aos-delay="500">Beach club</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<div class="media xs-mb-20">--}}
                        {{--<img class="mr-3" src="{{ asset('images/member/icon_partner.png') }}" alt="">--}}

                        {{--<div class="media-body align-self-center">--}}
                            {{--<p class="h3 font-montserrat">@lang('member/index.bus')</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<p>@lang('member/index.3b')</p>--}}

                    {{--<a href="{{ route('member.sirava.business_plan') }}" class="btn btn-secondary" data-aos="fade-right" data-aos-delay="500">@lang('general.more')</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<div class="media xs-mb-20">--}}
                        {{--<img class="mr-3" src="{{ asset('images/member/icon_setup.png') }}" alt="">--}}

                        {{--<div class="media-body align-self-center">--}}
                            {{--<p class="h3 font-montserrat">@lang('member/index.5')</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<p>@lang('member/index.5b')</p>--}}

                    {{--<a href="{{ route('member.sirava.how_to_invest') }}" class="btn btn-secondary" data-aos="fade-right" data-aos-delay="500">@lang('general.more')</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<div class="media xs-mb-20">--}}
                        {{--<img class="mr-3" src="{{ asset('images/member/icon_bonds.png') }}" alt="">--}}

                        {{--<div class="media-body align-self-center">--}}
                            {{--<p class="h3 font-montserrat">@lang('member/nav.invest')</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<p>@lang('member/index.7b')</p>--}}

                    {{--<a href="{{ route('member.invest') }}" class="btn btn-secondary" data-aos="fade-right" data-aos-delay="500">@lang('member/nav.invest')</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div id="video" class="col-12 col-md-6 col-lg-4">--}}
                {{--<div class="block">--}}
                    {{--<p class="h3 font-montserrat font-weight-bold color_white text-shadow">@lang('member/index.droneVideo')</p>--}}

                    {{--<a href="" class="btn btn-primary" data-aos="fade-right" data-aos-delay="500" data-toggle="modal" data-target="#mixedModal">@lang('member/index.watch')</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - Marketing materials')

@section('content')
    <div class="container xs-pt-20 xs-pb-20">
        <h1 class="color_primary">@lang('member/partner/marketing.title')</h1>

        <p>@lang('member/partner/marketing.text')</p>

        <p>@lang('member/partner/marketing.text2')</p>

        <p>@lang('member/partner/marketing.text3')</p>

        <h3>@lang('member/partner/marketing.link')</h3>

        @if(App::getLocale() == 'sk')
            <pre class="url">https://www.cee-realestate.com/sk?ref={{ Auth::user()->id }}</pre>
        @else
            <pre class="url">https://www.cee-realestate.com/?ref={{ Auth::user()->id }}</pre>
        @endif
    </div>

    <div class="container-fluid bg_secondary xs-pt-20 xs-pb-20">
        <div class="container">
            <h3>@lang('member/partner/marketing.banners')</h3>

            <div class="row">
                <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                    <h5 class="w-100 text-center">@lang('member/partner/marketing.html')</h5>

                    @if(App::getLocale() == 'sk')
                        <iframe src="https://banners.cee-realestate.com/sirava2/sk/300x250/index.html" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>
                    @else
                        <iframe src="https://banners.cee-realestate.com/sirava2/300x250/index.html" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>
                    @endif

                    <a href="{{ route('member.partner.marketing-materials.html-banners') }}" class="btn btn-primary btn-block mt-auto xs-mb-20 lg-mb-0">@lang('member/partner/marketing.allHTML')</a>
                </div>

                <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                    <h5 class="w-100 text-center">@lang('member/partner/marketing.fb')</h5>

                    @if(App::getLocale() == 'sk')
                        <img src="{{ asset('banners/fb/sk/sirava2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                    @else
                        <img src="{{ asset('banners/fb/sirava2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                    @endif

                    <a href="{{ route('member.partner.marketing-materials.fb-banners') }}" class="btn btn-primary btn-block mt-auto xs-mb-20 lg-mb-0">@lang('member/partner/marketing.allFB')</a>
                </div>

                <div class="col-12 col-lg-4 d-flex flex-column align-items-start">
                    <h5 class="w-100 text-center">@lang('member/partner/marketing.email')</h5>

                    <img src="{{ asset('images/member/email_templates/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">

                    <a href="{{ route('member.partner.email-banner', ['id' => 1]) }}" class="btn btn-primary btn-block mt-auto" target="_blank">@lang('member/partner/marketing.email2')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-pt-20 xs-pb-20">
        <h3>@lang('member/partner/marketing.videos')</h3>

        <div class="row">
            <div class="col-12 col-lg-6">
                <h5 class="text-center">@lang('member/partner/marketing.drone')</h5>

                @include('includes/videos/marketing/drone')

                <p class="xs-mt-20">Youtube URL link:</p>

                <pre class="url">{{ 'https://youtu.be/JSQBf1welL4' }}</pre>

                <p>Embed:</p>

                <pre class="url">{{ '<iframe width="560" height="315" src="https://www.youtube.com/embed/JSQBf1welL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' }}</pre>

                <div class="text-center">
                    <a href="{{ asset('videos/marketing/drone.mp4') }}" class="btn btn-primary xs-mb-20 lg-mb-0" download>@lang('member/partner/marketing.downloadVideo')</a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <h5 class="text-center">@lang('member/partner/marketing.park')</h5>

                @include('includes/videos/marketing/park')

                <p class="xs-mt-20">Youtube URL link:</p>

                <pre class="url">{{ 'https://youtu.be/cUYIo4BpM8c' }}</pre>

                <p>Embed:</p>

                <pre class="url">{{ '<iframe width="560" height="315" src="https://www.youtube.com/embed/cUYIo4BpM8c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' }}</pre>

                <div class="text-center">
                    <a href="{{ asset('videos/marketing/park.mp4') }}" class="btn btn-primary xs-mb-20 lg-mb-0" download>@lang('member/partner/marketing.downloadVideo')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg_secondary xs-pt-20 xs-pb-20">
        <div class="container">
            <h3>@lang('member/partner/marketing.fb2')</h3>

            @if(App::getLocale() == 'sk')
                <img src="{{ asset('images/member/fb_campaigns/sirava_sk.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20 lg-mb-0" alt="">
            @else
                <img src="{{ asset('images/member/fb_campaigns/sirava_en.jpg') }}" class="img-fluid d-block mx-auto img-thumbnail xs-mb-20 lg-mb-0" alt="">
            @endif
        </div>
    </div>

    <div class="container xs-pt-20 xs-pb-20">
        <h3>@lang('member/partner/marketing.lp')</h3>

        @if(App::getLocale() == 'sk')
            <iframe src="https://lp.cee-realestate.com/Slovakia" frameborder="1" width="100%" height="600px"></iframe>
        @else
            <iframe src="https://lp.cee-realestate.com/slovakia-en" frameborder="1" width="100%" height="600px"></iframe>
        @endif
    </div>
@endsection
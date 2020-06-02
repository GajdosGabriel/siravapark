@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - Facebook banners')

@section('content')
    <div class="container xs-pt-20 xs-pb-20">
        <a href="{{ route('member.partner.marketing-materials.home') }}"><- @lang('member/partner/marketing.back')</a>

        <h1 class="color_primary xs-mt-20">@lang('member/partner/marketing.fb')</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#1" role="tab">Buy-Fix-Sell</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#2" role="tab">Šírava</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="1" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <img src="{{ asset('banners/fb/sk/sirava2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                @else
                    <img src="{{ asset('banners/fb/sirava2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                @endif

                <div class="text-center">
                    @if(App::getLocale() == 'sk')
                        <a href="{{ asset('banners/fb/sk/sirava2.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                    @else
                        <a href="{{ asset('banners/fb/sirava2.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                    @endif
                </div>
            </div>

            <div class="tab-pane fade" id="2" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <img src="{{ asset('banners/fb/sk/sirava.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                @else
                    <img src="{{ asset('banners/fb/sirava.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt="">
                @endif

                <div class="text-center">
                    @if(App::getLocale() == 'sk')
                        <a href="{{ asset('banners/fb/sk/sirava.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                    @else
                        <a href="{{ asset('banners/fb/sirava.jpg') }}" class="btn btn-primary" download>@lang('member/partner/marketing.downloadImage')</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
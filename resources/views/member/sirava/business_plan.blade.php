@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Business plan')

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/flldp/22.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/business.title')</h1>
            </div>
        </div>
    </div>

    <div class="container project-details xs-mt-20">
        @if(App::getLocale() == 'sk')
            @for($i = 1; $i <= 30; $i++)
                <img src="{{ asset('images/member/business_plan_sk/business_plan_sk-page-' . sprintf('%03d', $i) . '.jpg') }}" class="img-fluid d-block mx-auto" alt="">
            @endfor
        @else
            @for($i = 1; $i <= 30; $i++)
                <img src="{{ asset('images/member/business_plan/business_plan_en-page-' . sprintf('%03d', $i) . '.jpg') }}" class="img-fluid d-block mx-auto" alt="">
            @endfor
        @endif

        <div class="text-center xs-mt-20 xs-mb-20">
            <a href="{{ asset('documents/business_plan_' . App::getLocale() . '.pdf') }}" class="btn btn-secondary" target="_blank">@lang('general.downloadPDF')</a>

            <hr class="primary part">

            <a href="{{ route('member.home') }}" class="btn btn-secondary">@lang('public/nav.home')</a>

            <a href="{{ route('member.invest') }}" class="btn btn-primary">@lang('member/nav.invest')</a>
        </div>
    </div>
@endsection
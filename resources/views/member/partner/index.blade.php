@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Partner program')

@section('startBody')
    @include('member/modals/partnerModal')

    @include('public/modals/marketingMaterialsModal')
@endsection

@section('content')
    <div class="container xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
        <h1 class="text-center xs-mb-20">@lang('member/partner.heading')</h1>

        <h3>@lang('member/partner.text')</h3>

        <p>@lang('member/partner.text2')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text3')</h3>

        <p>@lang('member/partner.text4')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text5')</h3>

        <p>@lang('member/partner.text6')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text9')</h3>

        <p>@lang('member/partner.text10')</p>

        <ul>
            <li>@lang('member/partner.point')</li>

            <li>@lang('member/partner.point2')</li>

            <li>@lang('member/partner.point3')</li>

            <li>@lang('member/partner.point4')</li>

            <li>@lang('member/partner.point5')</li>

            <li>@lang('member/partner.point6')</li>

            <li>@lang('member/partner.point7')</li>

            <li>@lang('member/partner.point8')</li>

            <li>@lang('member/partner.point9')</li>

            <li>@lang('member/partner.point10')</li>

            <li>@lang('member/partner.point11')</li>

            <li>@lang('member/partner.point12')</li>

            <li>@lang('member/partner.point13')</li>

            <li>@lang('member/partner.point14')</li>
        </ul>

        <p>@lang('member/partner.text11')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text12')</h3>

        <p>@lang('member/partner.text13')</p>

        <hr class="part primary">

        <h3>@lang('member/partner.text14')</h3>

        <p>@lang('member/partner.text15')</p>

        <hr class="part primary">

        @role('partner')
            <p class="text-center"><a href="" data-toggle="modal" data-target="#agreementModal">Terms & Conditions</a> of Partner program</p>
        @else
            <p class="lead text-center xs-mt-20">@lang('member/partner.text16')</p>

            <a href="" data-toggle="modal" data-target="#marketingMaterialsModal">
                @if(App::getLocale() == 'sk')
                    <img src="{{ asset('images/member/screen_marketing_materials_sk.png') }}" class="img-fluid d-block mx-auto xs-mt-20" alt="">
                @else
                    <img src="{{ asset('images/member/screen_marketing_materials.png') }}" class="img-fluid d-block mx-auto xs-mt-20" alt="">
                @endif
            </a>

            <p class="text-center xs-mt-20">@lang('member/partner.text17')</p>

            <form action="{{ route('member.partner.partnerPost') }}" method="POST" class="cee bg_secondary xs-mt-20 xs-p-20">
                @include('includes/errorList')

                @csrf

                <input type="hidden" name="subject" value="CEE Partner program">

                <div class="form-group row">
                    <label for="company" class="col-md-4 col-form-label text-md-right">@lang('form.company')</label>

                    <div class="col-md-6">
                        <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right">@lang('form.companyWebsite')</label>

                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required>
                    </div>
                </div>

                <div class="form-check text-center">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1" required>

                    <label class="form-check-label" for="defaultCheck1">
                        @lang('form.agree') <a href="" data-toggle="modal" data-target="#agreementModal">@lang('member/partner.agreement')</a>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary xs-mt-20">@lang('form.submit')</button>
                </div>
            </form>
        @endrole
    </div>
@endsection
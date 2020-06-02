@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - STEP 1')

@section('startBody')
    @include('member/modals/prTacModal')

    @include('member/modals/mandateModal')

    @include('member/modals/spModal')
@endsection

@section('content')
    <div class="container xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
        <div id="stepsProgress" class="d-none d-lg-block">
            <div class="row">
                <div class="col-lg-4">
                    <div class="xs-mb-10">
                        <h3 class="color_primary xs-mb-0">@lang('general.step') 1</h3>

                        <p>@lang('member/invest/step1.1')</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="xs-mb-10">
                        <h3 class="text-center color_primary xs-mb-0">@lang('general.step') 2</h3>

                        <p class="text-center">@lang('member/invest/step1.2')</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="xs-mb-10">
                        <h3 class="text-right color_primary xs-mb-0">@lang('general.step') 3</h3>

                        <p class="text-right">@lang('member/invest/step1.3')</p>
                    </div>
                </div>
            </div>

            <div class="progress md-mb-50">
                <div class="progress-bar bg_primary" role="progressbar" style="width: 33.3%;"></div>
            </div>
        </div>

        <form id="step1Form" action="{{ route('member.step1Post') }}" method="POST" class="cee">
            @csrf

            <ul class="nav nav-tabs nav-justified" id="step1Tablist" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pr-link" data-toggle="tab" href="#pr-tab" role="tab" aria-controls="pr-tab" aria-selected="true">
                        @lang('member/invest/step1.pr') <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/invest/step1.pri')"><i class="fas fa-info-circle"></i></span>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link{{ (!in_array(Auth::user()->id, config('cee.pr_clients'))) ? ' active' : '' }}" id="sp-link" data-toggle="tab" href="#sp-tab" role="tab" aria-controls="sp" aria-selected="false">--}}
{{--                        @lang('member/invest/step1.sp') <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/invest/step1.spi')"><i class="fas fa-info-circle"></i></span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" id="tdo-link" data-toggle="tab" href="#tdo-tab" role="tab" aria-controls="tdo" aria-selected="false">--}}
{{--                        @lang('member/invest/step1.tdo') <span class="popover-info" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="@lang('member/invest/step1.tdoi')"><i class="fas fa-info-circle"></i></span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>

{{--            @if(in_array(Auth::user()->id, config('cee.pr_clients')))--}}
                <input class="d-none" type="radio" name="type" id="pr" value="pr" checked>
{{--                <input class="d-none" type="radio" name="type" id="sp" value="sp">--}}
{{--            @else--}}
{{--                <input class="d-none" type="radio" name="type" id="sp" value="sp" checked>--}}
{{--            @endif--}}
{{--            <input class="d-none" type="radio" name="type" id="tdo" value="tdo">--}}

{{--            <input type="hidden" name="tdo[project]" value="1" readonly>--}}
{{--            <input type="hidden" name="sp[project]" value="1" readonly>--}}

            <div class="tab-content" id="step1TabContent">
                @include('member/includes/step1/pr')

{{--                @include('member/includes/step1/sp')--}}

{{--                @include('member/includes/step1/tdo')--}}
            </div>

            <div class="card bg_secondary xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
                <div class="card-body">
                    @include('includes/errorList')

                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            @include('member/includes/step1/personal')
                        </div>

                        <div class="col-xs-12 col-lg-6">
                            @include('member/includes/step1/company')

                            @include('member/includes/step1/joint')
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg_secondary xs-mt-20 lg-mt-50">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-9 xs-pt-15">
                            <div class="custom-control custom-checkbox{{ $errors->has('agree') ? ' is-invalid' : '' }}">
                                <input class="custom-control-input" type="checkbox" id="agree" name="agree" required>

                                <label class="custom-control-label" for="agree">
                                    @lang('member/invest/step1.read')
{{--                                    @if(in_array(Auth::user()->id, config('cee.pr_clients')))--}}
                                        <a id="pr_modal" href="" data-toggle="modal" data-target="#prTacModal">@lang('member/invest/step1.prTaC')</a>
{{--                                        <a id="sp_modal" class="d-none" href="" data-toggle="modal" data-target="#spModal">@lang('member/invest/step1.spTac')</a>--}}
{{--                                    @else--}}
{{--                                        <a id="sp_modal" href="" data-toggle="modal" data-target="#spModal">@lang('member/invest/step1.spTac')</a>--}}
{{--                                    @endif--}}
{{--                                    <a id="tdo_modal" class="d-none" href="" data-toggle="modal" data-target="#mandateModal">@lang('member/invest/step1.tdoIM')</a>--}}
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3">
                            <button id="submitButton" type="submit" class="btn btn-primary btn-block">@lang('member/invest/step1.nextStep')</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('addJS')
    <script type="text/javascript" src="{{ mix('js/step1.js') }}"></script>
@endsection
@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - STEP 2')

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
                <div class="progress-bar bg_primary" role="progressbar" style="width: 66.6%;"></div>
            </div>
        </div>

        <div class="row xs-mb-20 lg-mb-50">
            <div class="col-12 col-lg-6">
                <p class="lead font-montserrat">@lang('member/invest/step2.text')</p>

                <p class="small">@lang('member/invest/step2.text2')</p>
            </div>

            <div class="col-12 col-lg-6 text-center">
                <img src="{{ asset('images/member/logo_docusign.png') }}" class="img-fluid d-block mx-auto lg-mt-50" alt="">

                <a href="https://support.docusign.com/articles/How-do-I-sign-a-DocuSign-document-Basic-Signing" target="_blank">How do I sign document electronically?</a>
            </div>
        </div>

        <p class="text-center lead color_primary">@lang('member/invest/step2.text11')</p>

        <p class="text-center"><small>@lang('member/invest/step2.text12')</small></p>

        <div class="card bg_secondary xs-mb-20 lg-mb-50">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="lead font-montserrat">@lang('member/invest/step2.govID')</p>

                        <p class="small">@lang('member/invest/step2.text3')</p>
                    </div>

                    <div class="col-12 col-lg-6">
                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 1) ?? null,
                            'intID' => 1
                        ])@endcomponent
                    </div>
                </div>

                <hr class="primary">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="lead font-montserrat">@lang('member/invest/step2.address')</p>

                        <p class="small">@lang('member/invest/step2.text4')</p>
                    </div>

                    <div class="col-12 col-lg-6">
                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 2) ?? null,
                            'intID' => 2
                        ])@endcomponent
                    </div>
                </div>

                <hr class="primary">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="lead font-montserrat">@lang('member/invest/step2.funds')</p>

                        <p class="font-weight-bold font-montserrat">@lang('member/invest/step2.text5')</p>

                        <p class="small">@lang('member/invest/step2.text6')</p>
                    </div>

                    <div class="col-12 col-lg-6">
                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 3) ?? null,
                            'intID' => 3
                        ])@endcomponent
                    </div>
                </div>
            </div>
        </div>

        @if($objOrder->company)
            <p class="text-center lead">@lang('member/invest/step2.text7')</p>

            <div class="card bg_secondary xs-mb-20 lg-mb-50">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="lead font-montserrat">@lang('member/invest/step2.inco')</p>

                            <p class="small">@lang('member/invest/step2.text8')</p>
                        </div>

                        <div class="col-12 col-lg-6">
                            @component('components/member/documentUpload', [
                                'objDocuments' => $arrDocuments->where('document_id', 4) ?? null,
                                'intID' => 4
                            ])@endcomponent
                        </div>
                    </div>

                    <hr class="primary">

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="lead font-montserrat">@lang('member/invest/step2.documents')</p>

                            <p class="small">@lang('member/invest/step2.text9')</p>
                        </div>

                        <div class="col-12 col-lg-6">
                            @component('components/member/documentUpload', [
                                'objDocuments' => $arrDocuments->where('document_id', 5) ?? null,
                                'intID' => 5
                            ])@endcomponent
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="card bg_secondary">
            <div class="card-body">
                <form action="{{ route('member.step2Post') }}" method="POST" class="cee">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="confirm" name="confirm" required>

                                <label class="custom-control-label" for="confirm">
                                    @lang('member/invest/step2.text10')
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block">@lang('member/invest/step1.nextStep')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
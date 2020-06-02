@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - STEP 3')

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
                <div class="progress-bar bg_primary" role="progressbar" style="width: 100%;"></div>
            </div>
        </div>

        <div class="card bg_secondary xs-mb-20 lg-mb-50">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h2 class="paymentHeader color_primary font-pt-serif xs-mb-0"><i class="fas fa-university"></i> @lang('member/invest/step3.bank')</h2>
                    </div>

                    <div class="col-12 col-sm-6">
                        <img src="{{ asset('images/member/logo_vub_sm.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>

                <div class="row xs-mt-20 lg-mt-50">
                    <div class="col-12 col-lg-7">
                        <table class="table table-borderless font-montserrat">
                            <tr>
                                <td>@lang('member/invest/step3.iban')</td>

                                <td class="h5 font-weight-bold">SK30 0200 0000 0037 1899 0756</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderName')</td>

                                <td class="font-weight-bold">Mgr. Tomáš Gerbery, @lang('member/invest/step3.notary')</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderAddress')</td>

                                <td class="font-weight-bold">Mnoheľova 830/17, 058 01, Poprad, Slovenská Republika</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankName')</td>

                                <td class="font-weight-bold">Všeobecná úverová banka, a.s.</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankAddress')</td>

                                <td class="font-weight-bold">Mlynské nivy 1, 829 90, Bratislava, Slovenská Republika</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bic')</td>

                                <td class="font-weight-bold">SUBASKBX</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 col-lg-5">
                        <p class="font-montserrat">@lang('member/invest/step3.amount')</p>

                        <p class="font-montserrat font-weight-bold">&euro; {{ number_format($objOrder->tdo->investment, 2, ',', ' ') }}</p>

                        <p class="font-montserrat">@lang('member/invest/step3.reason')</p>

                        <p class="font-montserrat font-weight-bold">
                            @lang('member/invest/step3.tdoReason') {{ $objOrder->id }}
                        </p>

                        <hr class="primary">

                        <p class="lead font-montserrat xs-mb-5">@lang('member/invest/step3.transfer')</p>

                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 6) ?? null,
                            'intID' => 6
                        ])@endcomponent
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg_secondary">
            <div class="card-body">
                <form action="{{ route('member.step3Post') }}" method="POST" class="cee">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p class="h3 font-montserrat">@lang('member/invest/step3.ready')</p>

                            <p class="xs-mb-0">@lang('member/invest/step3.text') <span class="color_primary">@lang('member/nav.investments')</span> @lang('member/invest/step3.text2')</p>

                            <div class="custom-control custom-checkbox xs-mt-10">
                                <input class="custom-control-input" type="checkbox" id="confirm" name="confirm" required>

                                <label class="custom-control-label" for="confirm">
                                    @lang('member/invest/step3.12')
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <button type="submit" class="btn btn-primary btn-block xs-mt-20">@lang('member/invest/step3.finish2')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
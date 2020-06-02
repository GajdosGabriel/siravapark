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
                        <div class="media align-items-center xs-mt-20">
                            <img src="{{ asset('images/member/icon_bank_transfer.png') }}" class="xs-mr-20" alt="">

                            <div class="media-body">
                                <h2 id="bankTransferHeader" class="color_primary font-pt-serif xs-mb-0">@lang('member/invest/step3.bankDetails')</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <img src="{{ asset('images/member/logo_csob_sm.png') }}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>

                <p class="text-center lead xs-mt-20 lg-mt-50">@lang('member/invest/step3.11')</p>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        @include('includes/errorList')

                        @if($objBankDetails == null)
                            <form action="{{ route('member.bankDetailsPost') }}" method="POST" class="cee">
                                @csrf

                                <div class="form-group">
                                    <label for="iban">@lang('member/invest/step3.iban')</label>
                                    <input type="text" id="iban" class="form-control{{ $errors->has('iban') ? ' is-invalid' : '' }}" name="iban" value="{{ old('iban') }}" maxlength="50" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">@lang('member/invest/step3.holderName')</label>
                                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" maxlength="80" required>
                                </div>

                                <div class="form-group">
                                    <label for="address">@lang('member/invest/step3.holderAddress')</label>
                                    <input type="text" id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" maxlength="100" required>
                                </div>

                                <div class="form-group">
                                    <label for="bank_name">@lang('member/invest/step3.bankName')</label>
                                    <input type="text" id="bank_name" class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="bank_name" value="{{ old('bank_name') }}" maxlength="50" required>
                                </div>

                                <div class="form-group">
                                    <label for="bank_address">@lang('member/invest/step3.bankAddress')</label>
                                    <input type="text" id="bank_address" class="form-control{{ $errors->has('bank_address') ? ' is-invalid' : '' }}" name="bank_address" value="{{ old('bank_address') }}" maxlength="100" required>
                                </div>

                                <div class="form-group">
                                    <label for="bic">@lang('member/invest/step3.bic')</label>
                                    <input type="text" id="bic" class="form-control{{ $errors->has('bic') ? ' is-invalid' : '' }}" name="bic" value="{{ old('bic') }}" maxlength="20" required>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">@lang('form.submit')</button>
                                </div>
                            </form>
                        @else
                            <p class="text-center h4"><i class="fas fa-check text-success"></i> @lang('member/invest/step3.submitted')</p>
                        @endif
                    </div>

                    <div class="col-12 col-lg-6">
                        <p>@lang('member/invest/step3.off')</p>

                        <h5 class="color_primary">@lang('member/invest/step3.1')</h5>

                        <p>
                            @lang('member/invest/step3.2')<br>
                            @lang('member/invest/step3.3')<br>
                            @lang('member/invest/step3.4')<br>
                            @lang('member/invest/step3.5')
                        </p>

                        <h5 class="color_primary">@lang('member/invest/step3.6')</h5>

                        <p>
                            @lang('member/invest/step3.7')<br>
                            @lang('member/invest/step3.8')<br>
                            @lang('member/invest/step3.9')<br>
                            @lang('member/invest/step3.10')
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg_secondary xs-mb-20 lg-mb-50">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h2 class="paymentHeader color_primary font-pt-serif xs-mb-0"><i class="fas fa-university"></i> @lang('member/invest/step3.bank')</h2>
                    </div>

                    <div class="col-12 col-sm-6">
                        <img src="{{ asset('images/member/logo_csob_sm.png') }}" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>

                <div class="row xs-mt-20 lg-mt-50">
                    <div class="col-12 col-lg-7">
                        <table class="table table-borderless font-montserrat">
                            <tr>
                                <td>@lang('member/invest/step3.iban')</td>

                                <td class="h5 font-weight-bold">
                                    SK91 7500 0000 0040 2612 5125
                                </td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderName')</td>

                                <td class="font-weight-bold">Šírava Park, s.r.o.</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.holderAddress')</td>

                                <td class="font-weight-bold">Gorkého 5, 811 01, Bratislava</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankName')</td>

                                <td class="font-weight-bold">Československá obchodná banka, a.s.</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bankAddress')</td>

                                <td class="font-weight-bold">Žižkova 11, 811 02, Bratislava</td>
                            </tr>

                            <tr>
                                <td>@lang('member/invest/step3.bic')</td>

                                <td class="font-weight-bold">CEKOSKBX</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 col-lg-5">
                        <p class="font-montserrat">@lang('member/invest/step3.amount')</p>

                        <p class="font-montserrat font-weight-bold">&euro; {{ number_format($objOrder->pr->number * 5000, 2, ',', ' ') }}</p>

                        <p class="font-montserrat">@lang('member/invest/step3.reason')</p>

                        <p class="font-montserrat font-weight-bold">@lang('member/invest/step3.pr')
                            {{ $objOrder->pr->serial_numbers }}
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

        @if($objBankDetails)
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
        @endif
    </div>
@endsection
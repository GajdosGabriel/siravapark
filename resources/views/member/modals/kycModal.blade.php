<div id="kycModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('member/invest/step2.pep.title')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @include('includes/errorList')

                <form action="{{ route('member.pepPost') }}" id="kycForm" name="kycForm" method="POST" class="cee">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q1')</strong></p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="isPepYes" name="is_pep" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="isPepYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="isPepNo" name="is_pep" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="isPepNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <p class="xs-mb-0 xs-mt-10">@lang('member/invest/step2.pep.1')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="pep1" name="type" class="custom-control-input" value="international PEP">
                        <label class="custom-control-label" for="pep1">@lang('member/invest/step2.pep.2')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="pep2" name="type" class="custom-control-input" value="home PEP - national">
                        <label class="custom-control-label" for="pep2">@lang('member/invest/step2.pep.3')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="pep3" name="type" class="custom-control-input" value="home PEP - local">
                        <label class="custom-control-label" for="pep3">@lang('member/invest/step2.pep.4')</label>
                    </div>

                    <hr class="primary">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q2')</strong></p>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.5')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="isSanctionedYes" name="sanctioned" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="isSanctionedYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="isSanctionedNo" name="sanctioned" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="isSanctionedNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <hr class="primary">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q3')</strong></p>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.6')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="isEndYes" name="end_user" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="isEndYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="isEndNo" name="end_user" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="isEndNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <hr class="primary">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q4')</strong></p>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.7')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="governmentSectorYes" name="government_sector" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="governmentSectorYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="governmentSectorNo" name="government_sector" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="governmentSectorNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <div class="form-group">
                        <label for="governmentSectorType">@lang('member/invest/step2.pep.8')</label>
                        <input type="text" class="form-control" id="governmentSectorType" name="government_sector_type" maxlength="255">
                    </div>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.9')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="sectorsYes" name="sectors" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="sectorsYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="sectorsNo" name="sectors" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="sectorsNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <div class="form-group">
                        <label for="sectorType">@lang('member/invest/step2.pep.8')</label>
                        <input type="text" class="form-control" id="sectorType" name="sector_type" maxlength="255">
                    </div>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.11')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="businessmanYes" name="businessman" class="custom-control-input" value="yes" required>
                        <label class="custom-control-label" for="businessmanYes">@lang('member/invest/step2.pep.yes')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="businessmanNo" name="businessman" class="custom-control-input" value="no" required>
                        <label class="custom-control-label" for="businessmanNo">@lang('member/invest/step2.pep.no')</label>
                    </div>

                    <hr class="primary">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q5')</strong></p>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.12')</p>

                    <hr class="primary">

                    <p class="xs-mb-0"><strong>@lang('member/invest/step2.pep.q6')</strong></p>

                    <p class="xs-mb-0">@lang('member/invest/step2.pep.13')</p>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="investment1" name="investment" class="custom-control-input" value="buy of real estate" required>
                        <label class="custom-control-label" for="investment1">@lang('member/invest/step2.pep.14')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block xs-mr-20">
                        <input type="radio" id="investment2" name="investment" class="custom-control-input" value="investment in trading company" required>
                        <label class="custom-control-label" for="investment2">@lang('member/invest/step2.pep.15')</label>
                    </div>

                    <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="investment3" name="investment" class="custom-control-input" value="investment in real estate project" required>
                        <label class="custom-control-label" for="investment3">@lang('member/invest/step2.pep.16')</label>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>

                <button type="submit" form="kycForm" class="btn btn-primary">@lang('form.submit')</button>
            </div>
        </div>
    </div>
</div>
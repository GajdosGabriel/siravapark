<div id="prTacModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('member/contracts/pr.terms')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{--@component('components/member/contracts/pr_preview')@endcomponent--}}

                <img src="{{ asset('images/member/contract_screenshots/pr_'. App::getLocale() . '.jpg') }}" class="img-fluid b-block" alt="">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>
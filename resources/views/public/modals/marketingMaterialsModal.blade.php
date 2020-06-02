<div id="marketingMaterialsModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Marketing materials</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @if(App::getLocale() == 'sk')
                    <img src="{{ asset('images/member/screenshot_marketing_materials_sk.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                @else
                    <img src="{{ asset('images/member/screenshot_marketing_materials.jpg') }}" class="img-fluid d-block mx-auto" alt="">
                @endif
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>
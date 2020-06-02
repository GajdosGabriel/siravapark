<div id="contactModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('general.contactUs')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @include('includes/errorList')

                <form id="contactForm" class="cee" method="POST" action="{{ route('member.contactPost') }}">
                    @csrf

                    <input type="hidden" name="subject" value="CEE Member area contact form">

                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">@lang('form.message')</label>

                        <div class="col-md-6">
                            <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" required maxlength="500">{{ old('text') }}</textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>

                <button type="submit" form="contactForm" class="btn btn-primary">@lang('form.send')</button>
            </div>
        </div>
    </div>
</div>
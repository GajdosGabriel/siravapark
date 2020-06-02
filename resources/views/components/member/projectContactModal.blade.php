<div id="projectContactModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact us</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="projectContactForm" class="cee" method="POST" action="{{ route('member.contactPost') }}">
                    @csrf

                    <input type="hidden" name="subject" value="CEE Project contact form :: {{ $title }}">

                    <input type="hidden" name="project" value="{{ Request::url() }}">

                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">Message</label>

                        <div class="col-md-6">
                            <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" required maxlength="500">{{ old('text') }}</textarea>

                            @if ($errors->has('text'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>

                <button type="submit" form="projectContactForm" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>
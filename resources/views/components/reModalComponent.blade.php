<div id="rmiModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('real_estate.rmi')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @include('includes/errorList')

                <form action="{{ route('sign-up') }}" method="POST">
                    @csrf

                    <input type="hidden" name="re" value="{{ $re }}">

                    <div class="form-group">
                        <label for="name">@lang('holiday.19')</label>

                        <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('holiday.20')</label>

                        <input type="email" class="form-control" id="email" name="email" maxlength="70" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">@lang('holiday.21')</label>

                        <input type="text" class="form-control" id="phone" name="phone" maxlength="30" required>
                    </div>

                    <div class="form-group">
                        <label for="country">@lang('holiday.23')</label>

                        <select type="text" class="form-control" id="country" name="country" required>
                            {!! App\Classes\Country::countries(old('country')) !!}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">@lang('contact.message')</label>

                        <textarea id="message" name="message" class="form-control" rows="4" required minlength="20" maxlength="500"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">@lang('holiday.submit')</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('index.close')</button>
            </div>
        </div>
    </div>
</div>
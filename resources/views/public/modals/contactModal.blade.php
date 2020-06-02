<div id="contactModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('general.contactUs')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body d-flex justify-content-center">
                @include('includes/errorList')

                <form id="contactForm" method="POST" action="{{ route('contactPost') }}" style="width: 550px; max-width: 580px">
                    @csrf

                    <div class="form-group ">
                        <label for="name" >@lang('contact.fullName')</label>

                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" maxlength="70" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">@lang('contact.phone')</label>

                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" maxlength="30" required>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="formGroupExampleInput"><span style="font-size: 85%">@lang('public/taborisko.date-of-arrive')</span></label>
                                        <input type="date" name="arrival" class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="formGroupExampleInput"><span style="font-size: 80%">@lang('public/taborisko.date-of-depature')</span></label>
                                        <input type="date" name="departure" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="formGroupExampleInput">@lang('public/taborisko.adults')</label>
                                    <input type="number" value="1" name="adults" class="form-control" required>
                                </div>

                                <div class="col-6">
                                    <label for="formGroupExampleInput">@lang('public/taborisko.kids')</label>
                                    <input type="number" value="0" name="kids" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputState">@lang('public/taborisko.state')</label>
                        <select name="place" id="inputState" class="form-control"  required>
                            <option value="" selected>@lang('general.choose')</option>
                            <option value="1-Tent">@lang('public/taborisko.place1')</option>
                            <option value="2-Caravant">@lang('public/taborisko.place2')</option>
                            <option value="3-Campers">@lang('public/taborisko.place3')</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="text">@lang('contact.message')</label>

                        <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" maxlength="500">{{ old('text') }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-blue">@lang('contact.send')</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>

{{--<div id="registerModal" class="modal fade" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">@lang('public/nav.signUp')</h5>--}}

{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}
{{--                <h4 class="xs-mb-20 title text-center">@lang('auth.sign')</h4>--}}

{{--                @include('includes/errorList')--}}

{{--                <form id="registerForm" class="cee xs-mt-20 lg-mt-50" method="POST" action="{{ route('public.register') }}">--}}
{{--                    @csrf--}}

{{--                    <input type="hidden" name="urlCurrent" value="{{ url()->current() }}">--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="full_name" class="col-md-4 col-form-label text-md-right">@lang('form.fullName')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="full_name" type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="{{ old('full_name') }}" minlength="5" maxlength="80" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="registerEmail" class="col-md-4 col-form-label text-md-right">@lang('form.email')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="registerEmail" type="email" class="form-control{{ $errors->has('registerEmail') ? ' is-invalid' : '' }}" name="registerEmail" value="{{ old('registerEmail') }}" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.phone')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <div class="input-group">--}}
{{--                                <select class="form-control" name="phone_code" required>--}}
{{--                                    <option value="">@lang('form.countryCode')</option>--}}
{{--                                    {!! App\Classes\Country::phoneCodes(old('phone_code')) !!}--}}
{{--                                </select>--}}

{{--                                <div class="input-group-append">--}}
{{--                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="registerPassword" class="col-md-4 col-form-label text-md-right">@lang('form.pass')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="registerPassword" type="password" class="form-control{{ $errors->has('registerPassword') ? ' is-invalid' : '' }}" name="registerPassword" minlength="8" maxlength="20" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="custom-control custom-checkbox text-center xs-mb-10">--}}
{{--                        <input class="custom-control-input" type="checkbox" id="ppCheck" required>--}}

{{--                        <label class="custom-control-label" for="ppCheck">--}}
{{--                            @lang('form.agree') <a href="" data-toggle="modal" data-target="#ppModal">@lang('legal/pp.title')</a>.--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-primary btn-block d-block d-lg-none">@lang('nav.signup')</button>--}}
{{--                </form>--}}

{{--                <div class="text-center xs-mt-20 lg-mt-50">--}}
{{--                    <a href="" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">@lang('auth.already')</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="modal-footer d-none d-lg-flex">--}}
{{--                <button type="submit" form="registerForm" class="btn btn-primary">@lang('public/nav.signUp')</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

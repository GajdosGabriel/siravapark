{{--<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">@lang('public/nav.logIn')</h5>--}}

{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}
{{--                <h4 class="xs-mb-20 title text-center">@lang('auth.log')</h4>--}}

{{--                @include('includes/errorList')--}}

{{--                <form id="loginForm" class="cee xs-mt-20 lg-mt-50" method="POST" action="{{ route('public.login') }}">--}}
{{--                    @csrf--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="email" class="col-sm-4 col-form-label text-md-right">@lang('form.email')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('form.pass')</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-secondary btn-block d-block d-lg-none">@lang('nav.login')</button>--}}
{{--                </form>--}}

{{--                <div class="text-center xs-mt-20 lg-mt-50">--}}
{{--                    <a class="btn btn-link" href="{{ route('public.password.request') }}">@lang('auth.forgot')</a>--}}

{{--                    <a href="" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">@lang('auth.need')</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="modal-footer d-none d-lg-flex">--}}
{{--                <button type="submit" form="loginForm" class="btn btn-secondary">@lang('public/nav.logIn')</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

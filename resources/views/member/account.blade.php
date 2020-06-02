@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Account settings')

@section('content')
    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="card">
            <div class="card-body">
                <h1>@lang('member/settings.title')</h1>

                @include('includes/errorList')

                <div class="row xs-mt-20">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <form action="{{ route('member.accountPost') }}" id="accountForm" method="POST" class="cee">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">@lang('form.name')</label>

                                        <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? Auth::user()->name }}" maxlength="30" required>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="surname">@lang('form.surname')</label>

                                        <input type="text" id="surname" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') ?? Auth::user()->surname }}" maxlength="50" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone">@lang('form.phone')</label>

                                <div class="input-group">
                                    <select class="form-control" name="phone_code" required>
                                        <option value="">@lang('form.countryCode')</option>
                                        {!! App\Classes\Country::phoneCodes(old('phone_code') ?? Auth::user()->phone_code) !!}
                                    </select>

                                    <div class="input-group-append">
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') ?? Auth::user()->phone }}" maxlength="20" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country">@lang('form.country')</label>

                                <select id="country" name="country" class="form-control" required>
                                    <option value="">@lang('form.country')</option>
                                    {!! App\Classes\Country::countries(old('country') ?? Auth::user()->country) !!}
                                </select>
                            </div>

                            @role('partner')
                            <div class="form-group">
                                <label for="company">@lang('form.company')</label>

                                <input type="text" id="company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') ?? Auth::user()->company }}" maxlength="100" required>
                            </div>

                            <div class="form-group">
                                <label for="url">@lang('form.companyWebsite')</label>

                                <input type="text" id="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') ?? Auth::user()->url }}" maxlength="100" required>
                            </div>
                            @endrole

                            <hr class="part primary">

                            <div class="form-group">
                                <label for="password">@lang('form.pass')</label>

                                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8" maxlength="20">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">@lang('form.passConfirm')</label>

                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" minlength="8" maxlength="20">
                            </div>

                            <div class="text-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="accountForm" class="btn btn-primary">@lang('form.save')</button>
            </footer>
        </div>
    </div>
@endsection
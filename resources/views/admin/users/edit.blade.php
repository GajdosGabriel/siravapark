@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User edit')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.users.user', ['id' => $objUser->id]) }}"><- Back to user details</a>

                <h3 class="xs-mt-20">Edit User</h3>

                <form action="{{ route('admin.users.userEditPost') }}" id="userEditForm" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="id" value="{{ $objUser->id }}">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') ?? $objUser->name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">@lang('form.surname')</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') ?? $objUser->surname }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') ?? $objUser->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.phone')</label>

                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control" name="phone_code">
                                    <option value="">@lang('form.countryCode')</option>
                                    {!! App\Classes\Country::phoneCodes(old('phone_code') ?? $objUser->phone_code) !!}
                                </select>

                                <div class="input-group-append">
                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') ?? $objUser->phone }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">@lang('form.country')</label>

                        <div class="col-md-6">
                            <select id="country" name="country" class="form-control" required>
                                <option value="">@lang('form.country')</option>
                                {!! App\Classes\Country::countries(old('country') ?? $objUser->country) !!}
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company" class="col-md-4 col-form-label text-md-right">Company name</label>

                        <div class="col-md-6">
                            <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') ?? $objUser->company }}" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">Company website</label>

                        <div class="col-md-6">
                            <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') ?? $objUser->url }}" maxlength="100">
                        </div>
                    </div>

                    <hr class="part primary">

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('form.pass')</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8" maxlength="20">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('form.passConfirm')</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" maxlength="20">
                        </div>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="userEditForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection
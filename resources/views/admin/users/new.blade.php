@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - New user')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>New user</h3>

                <form action="{{ route('admin.users.userPost') }}" method="POST" id="newUserForm" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">@lang('form.surname')</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">@lang('form.email')</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.phone')</label>

                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control" name="phone_code">
                                    <option value="">@lang('form.countryCode')</option>
                                    {!! App\Classes\Country::phoneCodes(old('phone_code')) !!}
                                </select>

                                <div class="input-group-append">
                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">@lang('form.country')</label>

                        <div class="col-md-6">
                            <select id="country" name="country" class="form-control" required>
                                <option value="">@lang('form.country')</option>
                                {!! App\Classes\Country::countries(old('country')) !!}
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('form.pass')</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8" maxlength="20" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('form.passConfirm')</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" maxlength="20" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <label for="">iContact list</label>
                    </div>

                    <div class="custom-control custom-radio text-center xs-mb-10">
                        <input class="custom-control-input" type="radio" name="list" id="en" value="en" checked>
                        <label class="custom-control-label" for="en">
                            English
                        </label>
                    </div>

                    <div class="custom-control custom-radio text-center xs-mb-10">
                        <input class="custom-control-input" type="radio" name="list" id="sk" value="sk">
                        <label class="custom-control-label" for="sk">
                            Slovak
                        </label>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" form="newUserForm" class="btn btn-primary">SAVE</button>
            </footer>
        </div>
    </div>
@endsection
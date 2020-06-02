@extends('public/_layout2')

@section('title', 'Šírava Park - Contact')

@section('content')

    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/contact/header_cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/contact/header_cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                {{--<img class="mr-3" src="{{ asset('images//icon.png') }}" alt="">--}}

                {{--<div class="media-body">--}}
                    <h3 class="title">@lang('contact.title')</h3>
                {{--</div>--}}
            </div>
        </header>
    </div>

    {{-- Head Bratislava--}}
    <div class="bg_grey2 xs-pt-20 xs-pb-20">
        <div class="container">
            {{--<h1 class="text-center xs-mb-20">@lang('contact.title')</h1>--}}

            {{--<p class="lead text-center">@lang('contact.text')</p>

            <hr class="part blue">--}}

            <div class="row">
                <div class="col-12 col-lg-4">
                    <p class="h4 text-center">@lang('contact.head')</p>

                    <img src="{{ asset('images/contact/ba.jpg') }}" class="img-fluid w-100" alt="">

                    <h4 class="xs-mt-20">Bratislava, @lang('contact.state')</h4>

                    <address class="sirava">
                        <span class="col_blue">@lang('contact.address'):</span> Gorkého 5, Bratislava, 81101<br>

                        <span class="col_blue">@lang('contact.phone'):</span> +421 915 36 46 22<br>

                        <span class="col_blue">E-mail:</span> <a href="mailto:info@siravapark.com">info@siravapark.com</a><br>

                        <span class="col_blue">@lang('contact.company'):</span> 52 028 461<br>

                       {{-- <span class="col_blue">@lang('contact.lei'):</span> 097900BIHN0000163735<br>--}}
                    </address>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1119.3649062898603!2d17.10943105305434!3d48.14276250335648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8942f8853e23%3A0x7b05a3f2fa496198!2sGork%C3%A9ho%20210%2F5%2C%20811%2001%20Bratislava!5e0!3m2!1ssk!2ssk!4v1586953383170!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1119.3649062898603!2d17.10943105305434!3d48.14276250335648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8942f8853e23%3A0x7b05a3f2fa496198!2sGork%C3%A9ho%20210%2F5%2C%20811%2001%20Bratislava!5e0!3m2!1ssk!2ssk!4v1586953383170!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Head Michalovce--}}
    <div class="xs-pt-20 xs-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    {{--<p class="h4 text-center">@lang('contact.head')</p>--}}

                    <img src="{{ asset('images/contact/kl.jpg') }}" class="img-fluid w-100" alt="">

                    <h4 class="xs-mt-20">Klokočov, @lang('contact.state')</h4>

                    <address class="sirava">
                        <span class="col_blue">@lang('contact.address'):</span> Klokočov 54, <br> Vinné, 072 31<br>

                        <span class="col_blue">@lang('contact.phone'):</span>+421 915 36 46 22<br>

                        <span class="col_blue">E-mail:</span> <a href="mailto:info@siravapark.com">info@siravapark.com</a><br>

                        {{--<span class="col_blue">@lang('contact.company'):</span> 51 773 074<br>--}}

                        {{--<span class="col_blue">@lang('contact.lei'):</span> 097900BIHN0000163735<br>--}}
                    </address>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4681.5388405064505!2d22.02661738676508!3d48.811953287666924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473936ea4eeb92af%3A0xc40cfbc81dca7f6e!2sKloko%C4%8Dov%2054%2C%20072%2036%20Kloko%C4%8Dov!5e0!3m2!1ssk!2ssk!4v1580733070154!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d743.486310243883!2d21.916405697206287!3d48.7547227044169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473932391dce9ec9%3A0x629fe6e1ff5196b1!2sSama+Chalupku+1240%2F10%2C+071+01+Michalovce!5e0!3m2!1ssk!2ssk!4v1559639865113!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg_grey2">
        <div class="container xs-pt-20 xs-pb-20 lg-pb-50">

        <div class="row">
            <div class="col-12 col-lg-4">
                @include('includes/errorList')

                <form method="POST" action="{{ route('contactPost') }}">
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

                    <div class="form-group">
                        <label for="text">@lang('contact.message')</label>

                        <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" minlength="20" maxlength="500" required>{{ old('text') }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-blue">@lang('contact.send')</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9 d-print-none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d37497.43764775952!2d21.976342452157446!3d48.79273176433241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d48.811292599999994!2d22.041712699999998!4m0!5e0!3m2!1sen!2ssk!4v1545398277418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@extends('public/_layout2')

@section('title') Šírava Park - @lang('location.title') @endsection

@section('content')
    <div class="container-fluid">
        <header class="pageHeader">
            <img src="{{ asset('images/location/cover_sm.jpg') }}" class="img-fluid d-block d-lg-none mx-auto" alt="">
            <img src="{{ asset('images/location/cover.jpg') }}" class="img-fluid d-none d-lg-block mx-auto" alt="">

            @include('includes/langs')

            <div class="text">
                <div class="media">
                    <img class="mr-3" src="{{ asset('images/location/icon.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="title">@lang('location.title')</h3>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <p>@lang('location.1')</p>

        {{--<p class="d-none d-md-block">@lang('location.2')</p>--}}

        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/1.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt="" data-aos="zoom-in"></a>
            </div>
        </div>

        <p class="xs-mt-20">@lang('location.3')</p>

        <p>@lang('location.4')</p>

        <img src="{{ asset('images/location/loc.jpg') }}" class="img-fluid d-block w-100" alt="">


        <h3 class="text-center col_blue xs-mt-20 lg-mt-50">@lang('boulevard.things2')</h3>

        <div class="row">
            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/5.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/5.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/6.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/6.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/7.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/7.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/11.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/11.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/9.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/9.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/10.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/10.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/8.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/8.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/12.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/12.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/2.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/3.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/4.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/5.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/5.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/6.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/6.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/features/oko/7.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/features/oko/sm/7.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/13.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/13.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/14.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/14.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="{{ asset('images/location/15.jpg') }}" target="_blank" data-lightbox="photos"><img src="{{ asset('images/location/sm/15.jpg') }}" class="img-fluid d-block mx-auto xs-mt-20" alt=""></a>
            </div>
        </div>


        {{-- Head Michalovce--}}
        <div class="xs-pt-20 xs-pb-20">

                <div class="row">
                    <div class="col-12 col-lg-4">

                        <div class="col-12 bg_grey2 py-4 mb-4">
                            <h3 class="title text-center mb-3">@lang('contact.title')</h3>
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
{{--                        <div class="embed-responsive embed-responsive-16by9">--}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d84075.38796828089!2d22.043356!3d48.813271!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1589199604878!5m2!1ssk!2ssk" width="100%" height="950" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
{{--                            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d37497.43764775952!2d21.976342452157446!3d48.79273176433241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d48.811292599999994!2d22.041712699999998!4m0!5e0!3m2!1sen!2ssk!4v1545398277418" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--                        </div>--}}
                    </div>
                </div>

        </div>



{{--        <div class="embed-responsive embed-responsive-16by9 d-print-none xs-mt-20">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d37497.43764775952!2d21.976342452157446!3d48.79273176433241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m3!3m2!1d48.811292599999994!2d22.041712699999998!4m0!5e0!3m2!1sen!2ssk!4v1545398277418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--        </div>--}}
    </div>
@endsection

<!doctype html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ mix('css/xs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ mix('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ mix('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ mix('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ mix('css/xxl.css') }}" media="(min-width:1600px)">
    @yield('addCSS')
    <title>@yield('title', 'Šírava Park')</title>

    {{--For Facebook--}}
    @yield('otherMeta')


</head>

<body>



@include('includes/modals/ppModal')

@include('includes/modals/tacModal')
@include('includes/modals/mediaModal')

@if(Auth::guest())
    @include('public/modals/loginModal')

    @include('public/modals/registerModal')
@endif

@yield('startBody')

@section('nav')
    <div id="navContainer">
        @include('cookieConsent::index')

        <div class="container">
            <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand internal" href="#homeBlock">
                    <img src="{{ asset('images/logo_nav.png') }}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link internal" href="#homeBlock">@lang('index.home')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('beachClub') }}">@lang('boulevard.title')</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sirava-park') }}">Glamping</a>
                        </li>
{{--
                        <li class="nav-item">
                            <a class="nav-link"href="{{ route('re.apartments.index') }}">@lang('index.apartments')</a>
                        </li>
                        --}}

                        {{--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('index.re')
                            </a>

                            {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('re.index') }}">@lang('index.re')</a>--}}

                                {{--<a class="dropdown-item" href="{{ route('re.apartments.index') }}">@lang('index.apartments')</a>--}}

                                {{--<a class="dropdown-item" href="{{ route('re.terraced') }}">@lang('index.terraced')</a>--}}

                               {{--<a class="dropdown-item" href="{{ route('re.semi') }}">@lang('index.semi')</a>--}}

                               {{--<a class="dropdown-item" href="{{ route('re.standard') }}">@lang('index.standard')</a>--}}

                               {{--<a class="dropdown-item" href="{{ route('re.villas') }}">@lang('index.villas')</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                       {{--<li class="nav-item">--}}
                           {{--<a class="nav-link" href="{{ route('spa') }}">@lang('index.spa')</a>--}}
                       {{--</li>--}}


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('taborisko') }}">TÁBORISKO</a>
                        </li>

                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('location') }}">@lang('index.location')</a>
                       </li>

{{--                       <li class="nav-item">--}}
{{--                           <a class="nav-link" href="{{ route('contact') }}">@lang('index.contact')</a>--}}
{{--                       </li>--}}

                       {{--@if(config('app.env') == 'local')--}}

                        {{--@if(Auth::guest())--}}
                            {{--<li class="nav-item"><a class="nav-link login" href="" data-toggle="modal"--}}
                                                    {{--data-target="#loginModal">@lang('public/nav.logIn')</a></li>--}}

                            {{--<li class="nav-item"><a class="nav-link action" href="" data-toggle="modal"--}}
                                                    {{--data-target="#registerModal">@lang('public/nav.signUp')</a></li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item"><a class="nav-link action" href="{{ route('member.home') }}">@lang('public/nav.memberArea')</a></li>--}}
                        {{--@endif--}}

                            {{--@endif--}}

                    </ul>
                </div>
            </nav>
        </div>
    </div>
@show

@yield('content')

@section('pageFooter')
    @include('footer')
@show



@include('flash::message')

@yield('endBody')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/aos/aos.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>

@if(Session::has('modal'))
    <script type="text/javascript">
        $('{!! '#' . Session::get('modal') . 'Modal' !!}').modal();
    </script>

    @php
        Session::forget('modal');
    @endphp
@endif



@include('includes/codes/google_analytics')

@include('includes/codes/adroll')

@include('includes/codes/fb')

@include('includes/codes/smartlook')

@include('includes/codes/chat')

@include('includes/modals/holidayFormModal')


@yield('addJS')
</body>
</html>

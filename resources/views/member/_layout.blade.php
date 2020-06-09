<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ mix('css/xs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ mix('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ mix('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ mix('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ mix('css/lightbox/css/lightbox.min.css') }}">
    @yield('addCSS')
    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body class="member">
@include('public/modals/rdModal')

@include('public/modals/ppModal')

@include('public/modals/tacModal')

@yield('startBody')

@section('navigation')
<div class="bg-light">
    <div class="container">
        <nav id="memberNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
        <a class="navbar-brand" href="{{ route('member.home') }}"><img src="{{ asset('images/logo_nav.png') }}"
                                                                       alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#memberNav" aria-controls="memberNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="memberNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link" href="{{ route('member.home') }}">@lang('public/nav.home')</a></li>

                {{--<li class="nav-item"><a class="nav-link" href="{{ route('member.invest') }}">@lang('member/nav.invest')</a></li>--}}

                {{--@if(Auth::user()->orders->count() > 0)--}}
                    {{--<li class="nav-item"><a class="nav-link" href="{{ route('member.investments') }}">@lang('member/nav.investments')</a></li>--}}
                {{--@endif--}}

                @role('partner')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            @lang('member/nav.partner')
                        </a>

                        <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('member.partner.home') }}">@lang('member/nav.partnerProgram')</a>

                            <a class="dropdown-item" href="{{ route('member.partner.your-signups') }}">@lang('member/nav.signUps')</a>

                            <a class="dropdown-item" href="{{ route('member.partner.marketing-materials.home') }}">@lang('member/nav.materials')</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('member.partner.home') }}">@lang('member/nav.partner')</a></li>
                @endrole

                <li class="nav-item"><a class="nav-link" href="{{ route('member.sirava.news') }}">@lang('public/nav.news')</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ route('member.contact') }}">@lang('public/nav.contact')</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">


                        @role('agent')
                            <a class="dropdown-item" href="{{ route('agent.home') }}">Agent area</a>
                        @endrole

                        @role('marketing')
                            <a class="dropdown-item" href="{{ route('marketing.home') }}">Marketing area</a>
                        @endrole

                        @role('admin')
                            <a class="dropdown-item" href="{{ route('admin.home') }}">Admin area</a>
                            <a class="dropdown-item" href="{{ route('public.home') }}">Public area</a>

                            {{--<div class="dropdown-divider"></div>--}}
                        @endrole

                        <a class="dropdown-item" href="{{ route('member.account') }}"><i class="fas fa-cog"></i> @lang('member/nav.settings')</a>

                        {{--@if(App::getLocale() != 'en')--}}
                            {{--<a class="dropdown-item" href="{{ route('lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flag_en.png') }}" alt=""> English</a>--}}
                        {{--@endif--}}

                        {{--@if(App::getLocale() != 'sk')--}}
                            {{--<a class="dropdown-item" href="{{ route('lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flag_sk.png') }}" alt=""> Slovensky</a>--}}
                        {{--@endif--}}

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href=""
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            @lang('member/nav.logOut')
                        </a>

                        <form id="logout-form" class="d-none" action="{{ route('public.logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@show

@yield('content')

@section('footer')

    @include('layouts.footer')
@show

@impersonating
<div id="impersonating">
    <p class="text-center xs-mb-5">You are now impersonating:</p>

    <p class="text-center lead xs-mb-10">{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>

    <a href="{{ route('member.leaveImpersonation') }}" class="btn btn-secondary btn-block">Leave impersonation</a>
</div>
@endImpersonating

@yield('endBody')

@include('flash::message')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/aos/aos.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/lightbox/lightbox.min.js') }}"></script>
<script type="text/javascript">
    AOS.init();
</script>

@include('includes/codes/google')

@include('includes/codes/chat')

@include('includes/codes/smartlook')

@yield('addJS')
</body>
</html>

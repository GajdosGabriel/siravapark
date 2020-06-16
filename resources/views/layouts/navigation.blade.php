<div id="navContainer">
    @include('cookieConsent::index')

    <div class="container">
        <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('public.home') }}">
                <img src="{{ asset('images/logo_nav.png') }}" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.home') }}">@lang('index.home')</a>
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

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                        <a class="nav-link" href="{{ route('taborisko') }}">@lang('public/taborisko.title')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('location') }}">@lang('index.location')</a>
                    </li>

                    @auth()
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.home') }}">@lang('order.home')</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </nav>
    </div>
</div>

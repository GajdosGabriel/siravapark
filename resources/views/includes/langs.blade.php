<div class="langs" style="z-index: 999">
    <div class="dropdown">
        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-globe-europe"></i> @lang('index.lang')
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'cz']) }}"><img src="{{ asset('images/flags/cz.png') }}" class="" alt=""> Česky</a>

            {{--<a class="dropdown-item" href="{{ route('lang', ['lang' => 'cn']) }}"><img src="{{ asset('images/flags/cn.png') }}" class="" alt=""> 中文</a>--}}

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'de']) }}"><img src="{{ asset('images/flags/de.png') }}" class="" alt=""> Deutsch</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flags/en.png') }}" class="" alt=""> English</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'hu']) }}"><img src="{{ asset('images/flags/hu.png') }}" class="" alt=""> Magyar</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'nl']) }}"><img src="{{ asset('images/flags/nl.png') }}" class="" alt=""> Nederlands</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'pl']) }}"><img src="{{ asset('images/flags/pl.png') }}" class="" alt=""> Polski</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flags/sk.png') }}" class="" alt=""> Slovensky</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'uk']) }}"><img src="{{ asset('images/flags/uk.png') }}" class="" alt=""> Українська</a>
        </div>
    </div>
</div>

<div class="langs" style="z-index: 999">
    <div class="dropdown">
        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-globe-europe"></i> @lang('index.lang')
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flags/en.png') }}" class="" alt=""> English</a>

            <a class="dropdown-item" href="{{ route('public.lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flags/sk.png') }}" class="" alt=""> Slovensky</a>

        </div>
    </div>
</div>

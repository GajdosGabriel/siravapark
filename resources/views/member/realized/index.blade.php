@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Realized projects')

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/tr_cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/track.title')</h1>

                <h3 class="color_primary xs-mb-0">@lang('member/why_invest.subtitle')</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid xs-pt-20 lg-pt-50 xs-pb-20">
        <p class="text-center lead">@lang('member/track.text')</p>

        <div class="row projects">
            <div class="col-12 col-sm-6 col-xl-3 xs-mb-10">
                <div id="rpRph1" class="project">
                    <header class="header">
                        <h5 class="text-center">Renovation project house 1</h5>

                        <h3 class="text-center">@lang('member/track.realized')</h3>
                    </header>

                    <a href="{{ route('member.realized.renovation_project_house1') }}" class="btn btn-primary" data-aos="fade-right">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 xs-mb-10">
                <div id="rpRph2" class="project">
                    <header class="header">
                        <h5 class="text-center">Renovation project house 2</h5>

                        <h3 class="text-center">@lang('member/track.realized')</h3>
                    </header>

                    <a href="{{ route('member.realized.renovation_project_house2') }}" class="btn btn-primary" data-aos="fade-right">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 xs-mb-10">
                <div id="rpRph3" class="project">
                    <header class="header">
                        <h5 class="text-center">Renovation project house 3</h5>

                        <h3 class="text-center">@lang('member/track.realized')</h3>
                    </header>

                    <a href="{{ route('member.realized.renovation_project_house3') }}" class="btn btn-primary" data-aos="fade-right">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 xs-mb-10">
                <div id="rpRndp" class="project">
                    <header class="header">
                        <h5 class="text-center">Recreational new development project</h5>

                        <h3 class="text-center">@lang('member/track.realized')</h3>
                    </header>

                    <a href="{{ route('member.realized.recreational_new_development_project') }}" class="btn btn-primary" data-aos="fade-right">@lang('general.more')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
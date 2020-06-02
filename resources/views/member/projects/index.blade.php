@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Projects')

@section('content')
    <div class="container">
        <div class="row projects">
            <div class="col-12 col-sm-6 xs-mb-10">
                <div id="hpRenovations" class="project">
                    <header class="header">
                        <h5 class="text-center">Short term renovation projects</h5>

                        <h3 class="text-center">Fixed ROI 10-12% p.a.</h3>
                    </header>

                    <a href="{{ route('member.projects.renovations') }}" class="btn btn-primary">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 xs-mb-10">
                <div id="hpCcrp" class="project">
                    <header class="header">
                        <h5 class="text-center">City center renovation project</h5>

                        <h3 class="text-center">Expected ROI 35%</h3>
                    </header>

                    <a href="{{ route('member.projects.ccrp') }}" class="btn btn-primary">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 xs-mb-10">
                <div id="hpWrrp" class="project">
                    <header class="header">
                        <h5 class="text-center">Wellness Resort renovation project</h5>

                        <h3 class="text-center">Expected ROI 45-65%</h3>
                    </header>

                    <a href="{{ route('member.projects.wrrp') }}" class="btn btn-primary">@lang('general.more')</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 xs-mb-10">
                <div id="hpFlldp" class="project">
                    <header class="header">
                        <h5 class="text-center">First-line lake development project</h5>

                        <h3 class="text-center">Expected ROI 55-75%</h3>
                    </header>

                    <a href="{{ route('member.projects.flldp') }}" class="btn btn-primary">@lang('general.more')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
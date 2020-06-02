@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - Your sign ups')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-20">
        <h1 class="color_primary">@lang('member/partner/signUps.title')</h1>

        <div class="row xs-mt-20">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>@lang('member/partner/signUps.clients') <span class="badge badge-secondary">{{ count($arrUsers) }}</span></h3>

                        <ul class="list-group users xs-mb-20 lg-mb-0">
                            @foreach($arrUsers as $objUser)
                                @component('components/member/user', ['objUser' => $objUser])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>@lang('member/partner/signUps.investors') <span class="badge badge-secondary">{{ count($arrInvestors) }}</span></h3>

                        <ul class="list-group users">
                            @foreach($arrInvestors as $objUser)
                                @component('components/member/user', ['objUser' => $objUser])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">@lang('member/partner/signUps.recentLogins') <span class="badge badge-secondary">{{ count($arrRecentLogins) }}</span></h3>

                        <ul class="list-group users">
                            @foreach($arrRecentLogins as $objActivity)
                                @component('components/member/recentLogin', ['objActivity' => $objActivity])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
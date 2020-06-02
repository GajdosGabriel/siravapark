@extends('admin/_layout')

@section('addCSS')
    <meta http-equiv="refresh" content="60">
@endsection

@section('title', env('APP_NAME') . ' :: Admin area')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        {{--<div class="card">--}}
            {{--<div class="card-body">--}}
                {{--<div id="adminPanel">--}}
                    {{--<div class="item">--}}
                        {{--<form action="{{ route('admin.users.home') }}" method="GET" class="form-inline cee">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" name="search" placeholder="Search users" required>--}}

                                {{--<div class="input-group-append">--}}
                                    {{--<button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                    {{--<div class="item">--}}
                        {{--<span class="text">--}}
                            {{--<i class="fas fa-user" data-toggle="tooltip" data-placement="top" title="Number of Users"></i> <span class="color_primary">{{ number_format($intTotalUsers, 0, '', ' ') }}</span>--}}
                            {{--</span>--}}
                    {{--</div>--}}

                    {{--<div class="item">--}}
                        {{--<span class="text">--}}
                            {{--<i class="fas fa-file-contract" data-toggle="tooltip" data-placement="top" title="Number of Promissory notes sold"></i>--}}

                            {{--Series A: <span class="color_primary">{{ count($arrPRSerials->where('series', 'A')) }}</span> |--}}
                            {{--Series B: <span class="color_primary">{{ count($arrPRSerials->where('series', 'B')) }}</span> |--}}
                            {{--Series C: <span class="color_primary">{{ count($arrPRSerials->where('series', 'C')) }}</span>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="row xs-mt-30">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="xs-mb-20">Most visited pages <span class="badge badge-secondary">
                                        {{ $pages->count() }}
                                    </span></h3>

                                {{--Graf--}}
                                <div style="height:200px">
                                    {!! $objChart->container() !!}
                                </div>

                                <table class="table table-sm table-striped table-bordered xs-mt-20 xs-mb-0">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Page</th>
                                        <th class="text-center">Visits all</th>
                                        <th class="text-center">Last week</th>
                                        <th class="text-center">This week</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($pages as $page)
                                        <tr>
                                            <td>{{ $page->name }}</td>
                                            <td class="text-center">{{ $page->view_total }}</td>
                                            <td class="text-center">{{ $page->view_last }}</td>
                                            <td class="text-center">{{ $page->view_now }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="xs-mb-20">Newest users <span class="badge badge-secondary">
                                        {{ $users->count() }}
                                    </span></h3>


                                {{--Graf--}}
                                <div class="xs-mb-20" style="height:200px">
                                    {!! $objNewestUsersChart->container() !!}
                                </div>

                                <ul class="list-group users">
                                    @foreach($users as $user)
                                        @component('components/admin/newestUser', ['objUser' => $user])@endcomponent
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 xs-mt-30">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="xs-mb-20">Newest partners <span class="badge badge-secondary">
                                        {{ count($arrPartners) }}
                                    </span></h3>

                                <ul class="list-group users">
                                    @foreach($arrPartners as $objUser)
                                        @component('components/admin/newestPartner', ['objUser' => $objUser])@endcomponent
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{--<div class="col-12 col-lg-6 xs-mt-30">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-body">--}}
                                {{--<h3 class="xs-mb-20">Newest Orders <span class="badge badge-secondary">--}}
                                        {{--{{ count($arrOrders) }}--}}
                                    {{--</span></h3>--}}

                                {{--<ul class="list-group users">--}}
                                    {{--@foreach($arrOrders as $objOrder)--}}
                                        {{--@component('components/admin/newestOrder', ['objOrder' => $objOrder])@endcomponent--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="card xs-mt-30">
                    <div class="card-body xs-pb-0">
                        <h3 class="xs-mb-20">Roles <span class="badge badge-secondary">
                                {{ count($arrRoles) }}
                            </span></h3>

                        <div class="row">
                            @foreach($arrRoles as $objRole)
                                <div class="col-3 xs-pb-20">
                                    <a href="{{ route('admin.users.byRole', ['name' => $objRole->name]) }}" class="btn btn-block btn-secondary">{{ $objRole->name }} <span class="badge badge-light">{{ $objRole->users_count }}</span></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="col-12 col-lg-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--@if(count($arrOnline) > 0)--}}
                            {{--<h3 class="xs-mb-20"><i class="fas fa-circle color_green"></i> Online users <span class="badge badge-secondary">{{ count($arrOnline) }}</span></h3>--}}

                            {{--<ul class="list-group users xs-mb-20">--}}
                                {{--@foreach($arrOnline as $objUser)--}}
                                    {{--@component('components/admin/onlineUser', ['objUser' => $objUser])@endcomponent--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                        {{--<h3 class="xs-mb-20">Recent logins <span class="badge badge-secondary">--}}
                                {{--{{ count($arrRecentLogins) }}--}}
                            {{--</span></h3>--}}

                        {{--<ul class="list-group users">--}}
                            {{--@foreach($arrRecentLogins as $objActivity)--}}
                                {{--@component('components/admin/recentLogin', ['objActivity' => $objActivity])@endcomponent--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

@section('addJS')
    <script src="{{ mix('js/chart/Chart.min.js') }}"></script>
    {!! $objChart->script() !!}
    {!! $objNewestUsersChart->script() !!}
@endsection


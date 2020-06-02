@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User - Activity')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.user', ['id' => $objUser->id]) }}">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="">Activity</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userRoles', ['id' => $objUser->id]) }}">Roles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userDocuments', ['id' => $objUser->id]) }}">Documents</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userBankDetails', ['id' => $objUser->id]) }}">Bank details</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userOrders', ['id' => $objUser->id]) }}">Orders</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userPep', ['id' => $objUser->id]) }}">KYC</a>
            </li>

            @if($objUser->hasRole('agent'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.userAgent', ['id' => $objUser->id]) }}">Assigned roles</a>
                </li>
            @endif

            @if($objUser->hasRole('partner'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.userPartner', ['id' => $objUser->id]) }}">Partner program</a>
                </li>
            @endif
        </ul>

        <div class="row xs-mt-30">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3>User activity <span class="badge badge-secondary">{{ count($arrUserActivities) }} / {{ $arrUserActivities->total() }}</span></h3>
                            </div>

                            <div class="col-6">
                                <div class="pagination-right">
                                    {{ $arrUserActivities->links() }}
                                </div>
                            </div>
                        </div>

                        <ul class="list-group users xs-mb-20">
                            @foreach($arrUserActivities as $objActivity)
                                @component('components/admin/userActivity', ['objActivity' => $objActivity])@endcomponent
                            @endforeach
                        </ul>

                        <div class="pagination-center">
                            {{ $arrUserActivities->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">User's most visited pages <span class="badge badge-secondary">{{ count($arrChartData) }}</span></h3>

                        <div style="height:200px">
                            {!! $objChart->container() !!}
                        </div>

                        <table class="table table-sm table-striped table-bordered xs-mt-20">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Page</th>
                                    <th class="text-right">Visits</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($arrChartData as $key => $value)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td class="text-right">{{ $value }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addJS')
    <script src="{{ mix('js/chart/Chart.min.js') }}"></script>
    {!! $objChart->script() !!}
@endsection
@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User - Partner program')

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.user', ['id' => $objUser->id]) }}">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.userActivity', ['id' => $objUser->id]) }}">Activity</a>
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
                    <a class="nav-link active" href="">Partner program</a>
                </li>
            @endif
        </ul>

        <div class="row xs-mt-30">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Registered clients</h3>

                        <ul class="list-group users">
                            @foreach($arrClients as $objUser)
                                @component('components/admin/referredUser', ['objUser' => $objUser])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Investors</h3>

                        <ul class="list-group users">
                            @foreach($arrInvestors as $objUser)
                                @component('components/admin/referredUser', ['objUser' => $objUser])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
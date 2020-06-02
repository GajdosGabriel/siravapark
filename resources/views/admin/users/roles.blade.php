@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User - Roles')

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
                <a class="nav-link active" href="">Roles</a>
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
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3>User's roles</h3>

                        <form action="{{ route('admin.users.userRolesPost') }}" method="POST" id="rolesForm" class="cee xs-mt-20">
                            @csrf

                            <input type="hidden" name="user_id" value="{{ $objUser->id }}">

                            <div class="columns-4">
                                @foreach($arrRoles as $objRole)
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="{{ $objRole->name }}" name="roles[]" value="{{ $objRole->name }}"{{ $objUser->hasRole($objRole->name) ? ' checked' : '' }}>

                                        <label class="form-check-label" for="{{ $objRole->name }}">{{ $objRole->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>

                    <footer class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" form="rolesForm">SAVE</button>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
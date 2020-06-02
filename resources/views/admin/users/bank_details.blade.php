@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User - Bank details')

@section('content')
    <div class="container-fluid xs-pt-20">
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
                <a class="nav-link active" href="">Bank details</a>
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
    </div>

    <div class="container xs-pt-30 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <h3>User's bank details</h3>

                <form action="{{ route('admin.users.userBankDetailsPost') }}" id="bankDetailsForm" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    @if($objUser->bank_details != null)
                        <input type="hidden" name="id" value="{{ $objUser->bank_details->id }}">
                    @endif

                    <input type="hidden" name="user_id" value="{{ $objUser->id }}">

                    <div class="form-group">
                        <label for="iban">Account / IBAN number</label>

                        <input type="text" id="iban" class="form-control" name="iban" value="{{ old('iban') ?? $objUser->bank_details != null ? $objUser->bank_details->iban : '' }}" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Account holder name</label>

                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') ?? $objUser->bank_details != null ? $objUser->bank_details->name : '' }}" maxlength="80" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Account holder address</label>

                        <input type="text" id="address" class="form-control" name="address" value="{{ old('address') ?? $objUser->bank_details != null ? $objUser->bank_details->address : '' }}" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="bank_name">Bank name</label>

                        <input type="text" id="bank_name" class="form-control" name="bank_name" value="{{ old('bank_name') ?? $objUser->bank_details != null ? $objUser->bank_details->bank_name : '' }}" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="bank_address">Bank address</label>

                        <input type="text" id="bank_address" class="form-control" name="bank_address" value="{{ old('bank_address') ?? $objUser->bank_details != null ? $objUser->bank_details->bank_address : '' }}" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="bic">BIC / SWIFT code</label>

                        <input type="text" id="bic" class="form-control" name="bic" value="{{ old('bic') ?? $objUser->bank_details != null ? $objUser->bank_details->bic : '' }}" maxlength="20" required>
                    </div>
                </form>
            </div>

            <footer class="card-footer text-right">
                <button type="submit" class="btn btn-primary" form="bankDetailsForm">SUBMIT</button>
            </footer>
        </div>
    </div>
@endsection
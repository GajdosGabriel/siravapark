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
                <a class="nav-link active" href="">KYC</a>
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
                        <h3>User's PEP/KYC</h3>

                        @if($objPep)
                            <p><strong>Is client a politically exposed person (PEP)?</strong> {{ $objPep->is_pep }}, {{ $objPep->type }}</p>

                            <p><strong>Is client a sanctioned person within the meaning of Act no. 289/2016 Z. z. on the implementation of international sanctions?</strong> {{ $objPep->sanctioned }}</p>

                            <p><strong>Is client a beneficiary of benefits within the meaning of Section 6a of Act no. 297/2008 Coll.</strong> {{ $objPep->end_user }}</p>

                            <p><strong>Identifying the origin of funds or assets in a business or business relationship,</strong></p>

                            <p>(a) Do you work in the public sector, the corporate sector (as a member of the board of directors) or in foundations / associations / legal entities (receiving or managing public funds)? {{ $objPep->government_sector }}, {{ $objPep->government_sector_type }}</p>

                            <p>(b) You are working in one of these sectors, weapons, gambling / betting offices, waste collection, metal production, car sales, production of chemical products, etc.? {{ $objPep->sectors }}, {{ $objPep->sector_type }}</p>

                            <p>c) Do you own a business company or a share in a business to the extent that it is the source of income? {{ $objPep->businessman }}</p>

                            <p><strong>Obtaining information about the purpose and the intended nature of a business or business relationship</strong> {{ $objPep->investment }}</p>
                        @else
                            <p class="text-center">User didnt fill any KYC yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
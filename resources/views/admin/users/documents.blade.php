@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User - Documents')

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
                <a class="nav-link active" href="">Documents</a>
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
    </div>

    <div class="container xs-pt-30 xs-pb-50">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>User's documents</h3>

                        <ul class="list-group users">
                            @foreach($arrDocuments as $objDocument)
                                @component('components/admin/userDocument', ['objDocument' => $objDocument])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Upload document</h3>

                        <form action="{{ route('admin.documents.uploadPost') }}" id="uploadDocumentForm" method="POST" class="cee" enctype="multipart/form-data">
                            @include('includes/errorList')

                            @csrf

                            <input type="hidden" name="user_id" value="{{ $objUser->id }}">

                            <div class="form-group">
                                <label for="type">Type</label>

                                <select class="form-control" id="type" name="type">
                                    @foreach($arrDocuments as $objDocument)
                                        <option value="{{ $objDocument->id }}">{{ $objDocument->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group file">
                                <label for="file"><img src="{{ asset('images/member/upload.png') }}" class="" alt=""> <span class="d-none d-md-inline">Select file</span></label>

                                <input type="file" class="form-control" id="file" name="file" required>
                            </div>
                        </form>
                    </div>

                    <footer class="card-footer text-right">
                        <button type="submit" class="btn btn-primary" form="uploadDocumentForm">SUBMIT</button>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
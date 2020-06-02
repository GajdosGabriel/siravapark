@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Users by status')

@section('content')
    <div class="container xs-pt-20 xs-pb-50">
        <h3>Select users by status</h3>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '0']) }}" class="btn btn-secondary btn-block">Not reached yet</a>
                    </div>

                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '1']) }}" class="btn btn-danger btn-block">Don't call</a>
                    </div>

                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '2']) }}" class="btn btn-warning btn-block">Call back</a>
                    </div>

                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '3']) }}" class="btn btn-hot btn-block">Hot client</a>
                    </div>

                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '5']) }}" class="btn btn-blue btn-block">Phase 3 client</a>
                    </div>

                    <div class="col-12 col-lg-3 xs-pb-20">
                        <a href="{{ route('admin.users.byStatus', ['id' => '4']) }}" class="btn btn-success btn-block">Already client</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
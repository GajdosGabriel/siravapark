@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User')

@section('content')
    <div class="container-fluid xs-mt-20 xs-mb-20">
        <ul class="nav nav-tabs xs-mb-20">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.user', ['id' => $objUser->id]) }}">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="">Activity</a>
            </li>
        </ul>

        <div class="container">
            <div class="pagination-center">
                {{ $arrUserActivities->links() }}
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
@endsection
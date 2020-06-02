@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - User')

@section('addCSS')
    <link rel="stylesheet" href="{{ asset('css/tempusdominus/tempusdominus-bootstrap-4.css') }}">
@endsection

@section('content')
    <div class="container-fluid xs-pt-20 xs-pb-50">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="">General</a>
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
                    <a class="nav-link" href="{{ route('admin.users.userPartner', ['id' => $objUser->id]) }}">Partner program</a>
                </li>
            @endif
        </ul>

        <ul class="nav float-right">
            <li class="nav-item ">
                @if($objUser->locked == 0)
                    <a class="button" href="#" data-toggle="modal" data-target="#lockUserModal" title="User can't login any more"><i class="fas fa-user-lock"></i></a>
                @else
                    <a class="text-danger" href="#" data-toggle="modal" data-target="#lockUserModal">Unlock</a>
                @endif
                    <a class="button" href="#" data-toggle="modal" data-target="#deleteModal" title="Delete user"><i class="fas fa-trash-alt"></i></a>
            </li>
        </ul>



        <div class="row xs-mt-30">
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-group float-right" role="group">
                            <a href="{{ route('admin.users.userEdit', ['id' => $objUser->id]) }}" class="btn btn-primary">Edit</a>

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>

                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a href="{{ route('admin.users.userImpersonate', ['id' => $objUser->id]) }}" class="dropdown-item">Impersonate</a>
                                </div>
                            </div>
                        </div>

                        <h3 class="xs-mb-20">General</h3>

                        <h2 class="color_primary">{{ $objUser->name }} {{ $objUser->surname }}</h2>

                        <p><strong>ID:</strong> {{ $objUser->id }}</p>

                        @if($objUser->referral_id != null)<p><strong>Referral:</strong> <a href="{{ route('admin.users.user', ['id' => $objUser->referral_id]) }}">{{ $objUser->referral->name }} {{ $objUser->referral->surname }}</a></p>@endif

                        <p><strong>E-mail:</strong> <a href="mailto:{{ $objUser->email }}">{{ $objUser->email }}</a></p>

                        <p><strong>Phone:</strong> <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}">+{{ $objUser->phone_code }} {{ $objUser->phone }}</a></p>

                        <p><strong>Country:</strong> {{ $objUser->country }}</p>

                        <p><strong>Company name:</strong> {{ $objUser->company }}</p>

                        <p><strong>Company website:</strong> {{ $objUser->url }}</p>

                        <p><strong>Created at:</strong> {{ date('j.n.Y H:i', strtotime($objUser->created_at)) }}</p>

                        @if(count($objUser->roles) > 0)
                            <p><strong>Roles:</strong>
                                @foreach($objUser->roles as $objRole)
                                    @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
                                @endforeach
                            </p>
                        @endif

                        <form action="{{ route('admin.users.userStatusPost') }}" method="POST" class="cee">
                            @csrf

                            <input type="hidden" name="id" value="{{ $objUser->id }}">

                            <div class="input-group">
                                <select name="status" class="custom-select">
                                    @component('components/admin/userStatusSelector', ['status' => $objUser->status])@endcomponent
                                </select>

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-secondary">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="xs-mb-20">Last visited pages <span class="badge badge-secondary">
                                {{ count($objUser->lastPages) }}
                            </span></h3>

                        <ul class="list-group users">
                            @foreach($objUser->lastPages as $objActivity)
                                @component('components/admin/userActivity', ['objActivity' => $objActivity])@endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{--<div class="col-12 col-lg-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h3 class="xs-mb-20">Comments <span class="badge badge-secondary">{{ count($objUser->comments) }}</span></h3>--}}

                        {{--<form action="{{ route('admin.comments.commentPost') }}" method="POST" class="cee">--}}
                            {{--@include('includes/errorList')--}}

                            {{--@csrf--}}

                            {{--<input type="hidden" name="user_id" value="{{ $objUser->id }}">--}}

                            {{--<input type="hidden" name="author_id" value="{{ Auth::user()->id }}">--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="text" class="d-none">Text</label>--}}

                                {{--<textarea class="form-control" id="text" name="text" rows="2" maxlength="300" required></textarea>--}}
                            {{--</div>--}}

                            {{--<div class="custom-control custom-checkbox text-center xs-mb-15">--}}
                                {{--<input class="custom-control-input" type="checkbox" id="note" name="note" value="1">--}}

                                {{--<label class="custom-control-label" for="note">Note</label>--}}
                            {{--</div>--}}

                            {{--<button type="submit" class="btn btn-primary btn-block">SAVE</button>--}}
                        {{--</form>--}}

                        {{--@if($objUser->comments->count() > 0)--}}
                            {{--<hr class="part primary">--}}

                            {{--<ul class="list-group users">--}}
                                {{--@foreach($objUser->comments as $objComment)--}}
                                    {{--@component('components/admin/comment', ['objComment' => $objComment])@endcomponent--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-12 col-lg-3">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h3 class="xs-mb-20">Reminders <span class="badge badge-secondary">{{ count($objUser->reminders) }}</span></h3>--}}

                        {{--<form action="{{ route('admin.reminders.newPost') }}" method="POST" class="cee">--}}
                            {{--@include('includes/errorList')--}}

                            {{--@csrf--}}

                            {{--<input type="hidden" name="user_id" value="{{ $objUser->id }}">--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="text" class="d-none">Text</label>--}}

                                {{--<textarea class="form-control" id="text" name="text" rows="2" maxlength="300" required></textarea>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="agent_id">Agent</label>--}}

                                {{--<select id="agent_id" name="agent_id" class="form-control" required>--}}
                                    {{--<option value="">Agent</option>--}}
                                    {{--@foreach($arrAgents as $objAgent)--}}
                                        {{--<option value="{{ $objAgent->id }}">{{ $objAgent->name }} {{ $objAgent->surname }}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="datetime">Datetime</label>--}}

                                {{--<div class="input-group date" id="datetimepicker1" data-target-input="nearest">--}}
                                    {{--<input type="text" name="datetime" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>--}}

                                    {{--<div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">--}}
                                        {{--<div class="input-group-text btn-secondary"><i class="fa fa-calendar"></i></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<button type="submit" class="btn btn-primary btn-block">SAVE</button>--}}
                        {{--</form>--}}

                        {{--@if($objUser->reminders->count() > 0)--}}
                            {{--<hr class="part primary">--}}

                            {{--<ul class="list-group users">--}}
                                {{--@foreach($objUser->reminders as $objReminder)--}}
                                    {{--@component('components/admin/reminder', ['objReminder' => $objReminder])@endcomponent--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>


        {{--Modal DELETE--}}

        <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete user
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body text-center">
                           <p>Are you sure you want to delete this user?</p>
                        <h3>{{ $objUser->name }} {{ $objUser->surname }}</h3>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('form.close')</button>
                        <a class="btn btn-primary" href="{{ route('admin.users.userDelete', ['id' => $objUser->id]) }}"title="Delete user">@lang('form.yes')</a>
                    </div>
                </div>
            </div>
        </div>


        {{--Modal BLOCK USER--}}
        <div id="lockUserModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Lock user
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body text-center">
                        @if($objUser->locked == 0)
                        <p>Are you sure you want to lock this user?</p>
                        @else
                           <p>Are you sure you want to unlock this user?</p>
                        @endif
                        <h3>{{ $objUser->name }} {{ $objUser->surname }}</h3>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('form.close')</button>
                        <a class="btn btn-primary" href="{{ route('admin.users.userLock', ['id' => $objUser->id]) }}" title="Delete user">@lang('form.yes')</a>
                    </div>
                </div>
            </div>
        </div>
@endsection

{{--@section('addJS')--}}
    {{--<script type="text/javascript" src="{{ mix('js/moment/moment.min.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ mix('js/tempusdominus/tempusdominus-bootstrap-4.min.js') }}"></script>--}}

    {{--<script type="text/javascript">--}}
        {{--$('#datetimepicker1').datetimepicker({--}}
            {{--format: 'YYYY-MM-DD HH:mm:00',--}}
            {{--sideBySide: true--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}
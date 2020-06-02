@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Hot users')

@section('content')
    <div class="container-fluid xs-mt-20 xs-mb-20">
        <div class="row">
            <div class="col-4">
                <h1>Hot users: <span class="badge badge-secondary">{{ count($arrUsers) }} / {{ $arrUsers->total() }}</span></h1>
            </div>

            <div class="col-2">
                <form action="" method="GET" class="form-inline cee xs-mt-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search users" required>

                        @if(isset($_GET['search']))
                            <div class="input-group-append">
                                <a href="{{ Request::url() }}" class="btn btn-outline-secondary" type="button"><i class="fas fa-times color_red"></i></a>
                            </div>
                        @endif

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-6 pagination-right">
                {{ $arrUsers->links() }}
            </div>
        </div>

        <ul class="list-group users xs-mt-20 xs-mb-20">
            @foreach($arrUsers as $objUser)
                <li class="list-group-item
                @if($objUser->status == 1) danger
                @elseif($objUser->status == 2) warning
                @elseif($objUser->status == 3) hot
                @elseif($objUser->status == 4) success
                @endif">
                    {{ $objUser->id }}
                    :: <a href="{{ route('admin.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->name }} {{ $objUser->surname }}</a>
                    :: {{ $objUser->country }},
                    <a href="mailto:{{ $objUser->email }}">{{ $objUser->email }}</a>,
                    <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}">+{{ $objUser->phone_code }} {{ $objUser->phone }}</a>

                    <span class="float-right">
                        @if(count($objUser->roles) > 0)
                            @foreach($objUser->roles as $objRole)
                                @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
                            @endforeach |
                        @endif

                        @if($objUser->referral != null)<a href="{{ route('admin.users.user', ['id' => $objUser->referral->id]) }}" class="badge badge-dark" data-toggle="tooltip" data-placement="top" title="Referral">{{ $objUser->referral->name }} {{ $objUser->referral->surname }}</a> |@endif

                        <a href="{{ route('admin.users.userAgent', ['id' => $objUser->id]) }}">Assign roles</a> |

                        {{ date('j.n. H:i', strtotime($objUser->created_at)) }}
                    </span>

                    @if($objUser->note)<p class="xs-mt-10 xs-mb-0"><strong>Note:</strong> {{ $objUser->note->text }}</p>@endif
                </li>
            @endforeach
        </ul>

        <div class="pagination-center">
            {{ $arrUsers->links() }}
        </div>
    </div>
@endsection
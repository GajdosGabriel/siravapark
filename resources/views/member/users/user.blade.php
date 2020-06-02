@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - User')

@section('content')
    <div class="container-fluid xs-mt-20">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="">General</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('member.partner.users.userActivity', ['id' => $objUser->id]) }}">Activity</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-12 col-lg-3 xs-pt-15 xs-pb-15">

                {{-- General--}}
                <h3 class="xs-mb-20">General</h3>

                <h2 class="color_primary">{{ $objUser->name }} {{ $objUser->surname }}</h2>

                <p><strong>E-mail:</strong> <a href="mailto:{{ $objUser->email }}">{{ $objUser->email }}</a></p>

                <p><strong>Phone:</strong> <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}">+{{ $objUser->phone_code }} {{ $objUser->phone }}</a></p>

                <p><strong>Country:</strong> {{ $objUser->country }}</p>

                <p><strong>Company name:</strong> {{ $objUser->company }}</p>

                <p><strong>Country website:</strong> {{ $objUser->url }}</p>

                <p><strong>Created at:</strong> {{ date('j.n.Y H:i', strtotime($objUser->created_at)) }}</p>

                <form action="{{ route('member.partner.users.userStatusPost') }}" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="id" value="{{ $objUser->id }}">

                    <div class="input-group mb-3">
                        <select name="status" class="custom-select">
                            @component('components/admin/userStatusSelector', ['status' => $objUser->status])@endcomponent
                        </select>

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">SAVE</button>
                        </div>
                    </div>
                </form>

                <hr class="part primary">

                <h3 class="xs-mb-20">Last visited pages <span class="badge badge-secondary">{{ count($objUser->lastPages) }}</span></h3>

                <ul class="list-group users">
                    @foreach($objUser->lastPages as $objActivity)
                        @component('components/admin/userActivity', ['objActivity' => $objActivity])@endcomponent
                    @endforeach
                </ul>
            </div>

            <div class="col-12 col-lg-3 xs-pt-15 xs-pb-15">

                {{-- Comments --}}
                <h3 class="xs-mb-20">Comments <span class="badge badge-secondary">{{ count($objUser->comments) }}</span></h3>

                <form action="{{ route('member.partner.users.commentPost') }}" method="POST" class="cee">
                    @include('includes/errorList')

                    @csrf

                    <input type="hidden" name="user_id" value="{{ $objUser->id }}">

                    <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">

                    <div class="form-group">
                        <label for="text" class="d-none">Text</label>

                        <textarea class="form-control" id="text" name="text" rows="2" maxlength="300" required></textarea>
                    </div>

                    <div class="form-group form-check text-center">
                        <input type="checkbox" class="form-check-input" id="note" name="note" value="1">
                        <label class="form-check-label" for="note">Note</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                </form>

                <hr class="part primary">

                <ul class="list-group users">
                    @foreach($objUser->comments as $objComment)
                        @component('components/member/comment', ['objComment' => $objComment])@endcomponent
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
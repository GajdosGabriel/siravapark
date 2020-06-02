@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Users with role ')

@section('content')
    <div class="container-fluid xs-mt-20 xs-mb-20">
        <div class="row">
            <div class="col-6">
                <form action="" method="GET" class="form-inline cee xs-mb-20">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search users" required>

                        @if(isset($_GET['search']))
                            <div class="input-group-append">
                                <a href="{{ Request::url() }}" class="btn btn-outline-secondary" type="button"><i class="fas fa-times color_red"></i></a>
                            </div>
                        @endif

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-6 pagination-right">
                {{ $arrUsers->links() }}
            </div>
        </div>

        <ul class="list-group users xs-mb-20">
            @foreach($arrUsers as $objUser)
                @component('components/admin/user', ['objUser' => $objUser])@endcomponent
            @endforeach
        </ul>

        <div class="pagination-center">
            {{ $arrUsers->links() }}
        </div>
    </div>
@endsection
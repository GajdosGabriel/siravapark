@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Agents')

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Agents: <span class="badge badge-secondary">{{ count($arrUsers) }} / {{ $arrUsers->total() }}</span></h3>
                    </div>

                    <div class="item">
                        <form action="" method="GET" class="form-inline cee">
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

                    <div class="float-right">
                        <div class="item">
                            @if(!Cookie::has('cee_red'))
                                <a href="{{ route('agent.users.red-display', ['bool' => 1]) }}" class="btn btn-danger btn-sm">Show red clients</a>
                            @else
                                <a href="{{ route('agent.users.red-display', ['bool' => 0]) }}" class="btn btn-danger btn-sm">Hide red clients</a>
                            @endif
                        </div>

                        <div class="item">
                            {{ $arrUsers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-pb-50">
        <div class="card xs-mt-20 xs-mb-20">
            <div class="card-body">
                <ul class="list-group users">
                    @foreach($arrUsers as $objUser)
                        @component('components/admin/agent', ['objUser' => $objUser])@endcomponent
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="pagination-center">
            {{ $arrUsers->links() }}
        </div>
    </div>
@endsection
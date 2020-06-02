<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
    <link rel="stylesheet" href="{{ mix('css/xs.css') }}">
    <link rel="stylesheet" href="{{ mix('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ mix('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ mix('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ mix('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">
    @yield('addCSS')
    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body class="admin">
@include('public/modals/rdModal')

@include('public/modals/ppModal')

@include('public/modals/tacModal')

@yield('startBody')

@section('navigation')
    <nav id="memberNavbar" class="navbar navbar-expand-lg navbar-light bg-light generalNavbar">
        <a class="navbar-brand" href="{{ route('admin.home') }}"><img src="{{ asset('images/logo_nav.png') }}"
                                                                       alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#memberNav" aria-controls="memberNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="memberNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.users.home') }}">All users</a>

                        <a class="dropdown-item" href="{{ route('admin.users.byRole') }}">By role</a>

                        <a class="dropdown-item" href="{{ route('admin.users.byStatus') }}">By status</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('admin.users.new') }}">New user</a>
                    </div>
                </li>

                {{--<li class="nav-item"><a class="nav-link" href="{{ route('admin.users.agents') }}">Agents</a></li>--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">--}}
                        {{--Orders--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu lang" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{ route('admin.orders.index') }}">Orders</a>--}}

                        {{--<a class="dropdown-item" href="{{ route('admin.orders.payments') }}">Payments</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li class="nav-item"><a class="nav-link" href="{{ route('admin.reminders.home') }}">Reminders</a></li>--}}

                {{--<li class="nav-item"><a class="nav-link" href="{{ route('admin.roles.home') }}">Roles</a></li>--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">--}}
                        {{--Articles--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu lang" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{ route('admin.articles.home') }}">Articles</a>--}}

                        {{--<a class="dropdown-item" href="{{ route('admin.articles.new') }}">New</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">--}}
                        {{--Other--}}
                    {{--</a>--}}

                    {{--<div class="dropdown-menu lang" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{ route('admin.sirava.index') }}">Šírava Park</a>--}}

                        {{--<a class="dropdown-item" href="{{ route('admin.contracts.index') }}">Contracts preview</a>--}}

                        {{--<a class="dropdown-item" href="{{ route('admin.gif.index') }}">GIFs</a>--}}

                        {{--@if(Auth::user()->id == 1)--}}
                            {{--<a class="dropdown-item" href="{{ route('admin.logs') }}">Logs</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</li>--}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                        @role('agent')
                            <a class="dropdown-item" href="{{ route('agent.home') }}">Agent area</a>
                        @endrole

                        @role('marketing')
                            <a class="dropdown-item" href="{{ route('marketing.home') }}">Marketing area</a>
                        @endrole

                        <a class="dropdown-item" href="{{ route('member.home') }}">Member area</a>

                        <a class="dropdown-item" href="{{ route('public.home') }}">Public area</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href=""
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Log out
                        </a>

                        <form id="logout-form" class="d-none" action="{{ route('public.logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@show

@yield('content')

{{--@if(count(Session::get('upcomingReminders')) > 0)--}}
    {{--<div id="remindersBlock">--}}
        {{--<a class="btn btn-secondary btn-xs float-right" data-toggle="collapse" href="#upcomingRemindersCollapse" role="button"><i class="fas fa-caret-down"></i> Expand/Collapse</a>--}}

        {{--<h5 class="text-danger xs-mb-0">Upcoming reminders <span class="badge badge-secondary">{{ count(Session::get('upcomingReminders')) }}</span></h5>--}}

        {{--<div id="upcomingRemindersCollapse" class="collapse xs-mt-10">--}}
            {{--<ul class="list-group users">--}}
                {{--@foreach(Session::get('upcomingReminders') as $objReminder)--}}
                    {{--@component('components/admin/upcomingReminder', ['objReminder' => $objReminder])@endcomponent--}}
                {{--@endforeach--}}
            {{--</ul>--}}

            {{--<div class="text-center xs-mt-10">--}}
                {{--<a class="btn btn-secondary btn-xs" data-toggle="collapse" href="#upcomingRemindersCollapse" role="button"><i class="fas fa-caret-down"></i> Expand/Collapse</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endif--}}

@yield('endBody')

@include('flash::message')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>

@yield('addJS')
</body>
</html>
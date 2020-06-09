<!doctype html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/b4helper.css') }}">
{{--    <link rel="stylesheet" href="{{ mix('css/fontawesome/css/all.min.css') }}">--}}
    <link rel="stylesheet" href="{{ mix('css/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/xs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sm.css') }}" media="(min-width:576px)">
    <link rel="stylesheet" href="{{ asset('css/md.css') }}" media="(min-width:768px)">
    <link rel="stylesheet" href="{{ asset('css/lg.css') }}" media="(min-width:992px)">
    <link rel="stylesheet" href="{{ asset('css/xl.css') }}" media="(min-width:1200px)">
    <link rel="stylesheet" href="{{ asset('css/xxl.css') }}" media="(min-width:1600px)">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @yield('addCSS')
    <title>@yield('title', 'Šírava Park')</title>

    {{--For Facebook--}}
    @yield('otherMeta')


</head>

<body>



@include('includes.modals.ppModal')

@include('includes.modals.tacModal')
@include('includes.modals.mediaModal')

@if(Auth::guest())
    @include('public.modals.loginModal')

    @include('public.modals.registerModal')
@endif

@yield('startBody')


@include('layouts.navigation')


@yield('content')

@section('pageFooter')
    @include('layouts.footer')
@show



@include('flash::message')

@yield('endBody')

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/aos/aos.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/main.js') }}"></script>

@if(Session::has('modal'))
    <script type="text/javascript">
        $('{!! '#' . Session::get('modal') . 'Modal' !!}').modal();
    </script>

    @php
        Session::forget('modal');
    @endphp
@endif



@include('includes.codes.google_analytics')

@include('includes.codes.adroll')

@include('includes.codes.fb')

@include('includes.codes.smartlook')

@include('includes.codes.chat')

@include('includes.modals.holidayFormModal')


@yield('addJS')
</body>
</html>

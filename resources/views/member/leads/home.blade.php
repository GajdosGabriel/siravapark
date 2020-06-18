@extends('layouts.app2')

@section('title', env('APP_NAME') . ' :: Lead area - Lead')

@section('content')



    <div id="app" class="flex min-h-screen bg-gray-700 text-white">


        @include('member.navigation-vertical')

        <div class="container py-5">

            <lead-table></lead-table>

        </div>


    </div>
@endsection

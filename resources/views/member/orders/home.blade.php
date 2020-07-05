@extends('layouts.app2')

@section('title', env('APP_NAME') . ' :: Order area - Order')

@section('content')



    <div id="app" class="flex min-h-screen bg-gray-700 text-white">


        @include('member.navigation-vertical')

        <div class=" p-5">
{{--            <order-form/>--}}



            <order-table/>

        </div>


    </div>
@endsection

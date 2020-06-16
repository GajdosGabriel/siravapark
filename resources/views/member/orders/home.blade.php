@extends('layouts.app2')

@section('title', env('APP_NAME') . ' :: Order area - Order')

@section('content')



    <div id="app" class="flex min-h-screen bg-gray-700 text-white">

        <div class="w-48 mr-12 p-6 bg-gray-800 border-r-2 border-gray-600">

            <navigation-right></navigation-right>

        </div>

        <div class="container py-5">
            <order-table/>
        </div>

{{--            <order-form inline-template>--}}
{{--                <div class="md:w-full my-10">--}}

{{--                    --}}{{--                    <p @click="isOpen =! isOpen" class="font-semibold cursor-pointer text-green-700 hover:text-green-500">New order</p>--}}

{{--                    <transition name="slide">--}}
{{--                        <form class="" v-show="isOpen" action="{{ route('order.store') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @include('member.orders._form')--}}
{{--                        </form>--}}
{{--                    </transition>--}}
{{--                </div>--}}
{{--            </order-form>--}}


    </div>
@endsection

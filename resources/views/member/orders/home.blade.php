@extends('layouts.app2')

@section('title', env('APP_NAME') . ' :: Order area - Order')

@section('content')

    <div id="app" class="container mx-auto px-4 py-5 min-h-screen">

        <order-form inline-template>
            <div class="md:w-full">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold">Order form</h2>
                    <button @click="isOpen =! isOpen" class="bg-blue-600 text-white py-2 px-5 mt-4 font-semibold  rounded shadow-md hover:bg-blue-400">Add</button>
                </div>
                <transition name="slide">
                <form v-show="isOpen" action="{{ route('order.store') }}" method="POST">
                    @csrf
                    @include('member.orders._form')
                </form>
                    </transition>
            </div>
        </order-form>

        <div class="w-full mt-12">
            <table class="table-auto">
                <thead class="bg-gray-400">
                <tr>
                    <th class="px-4 py-2">Full name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">People 6+</th>
                    <th class="px-4 py-2">People 6-</th>
                    <th class="px-4 py-2">Days</th>
                    <th class="px-4 py-2">Panel</th>
                </tr>
                </thead>
                <tbody>

                @forelse($orders as $order)
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{ $order->full_name }}</td>
                    <td class="border px-4 py-2">{{ $order->email }}</td>
                    <td class="border px-4 py-2">{{ $order->phone }}</td>
                    <td class="border px-4 py-2">{{ $order->adult }}</td>
                    <td class="border px-4 py-2">{{ $order->child }}</td>
                    <td class="border px-4 py-2">{{ $order->days }}</td>
                    <td class="border px-4 py-2">...</td>
                </tr>
                    @empty

                @endforelse


                </tbody>
            </table>
        </div>
    </div>
@endsection

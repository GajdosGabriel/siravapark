<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home() {
       $orders = Order::latest()->paginate();
        return view('member.orders.home', compact('orders'));
    }


    public function store(Request $request) {
        Order::create($request->all());
        return back();
    }
}

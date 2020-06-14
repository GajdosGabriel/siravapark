<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home() {
        return view('member.orders.home');
    }

    public function index() {
        return Order::latest()->paginate(8);
    }

    public function store(Request $request) {
        Order::create($request->all());
        return Order::latest()->get() ;
    }
}

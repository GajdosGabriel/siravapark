<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home() {
        return view('member.orders.home');
    }

    public function search($search = null) {
        return Order::where('full_name', 'like', '%'. $search .'%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->paginate(10);
    }

    public function store(Request $request) {


        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

      return Order::create($request->all());
    }
}

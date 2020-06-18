<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function home() {
        return view('member.leads.home');
    }

    public function index() {
        return Lead::latest()->paginate(15);
    }


    public function search($search) {
        return Lead::where('name', 'like', '%'. $search .'%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->paginate(15);
    }

    public function store(Request $request) {
        return Lead::create($request->all());
    }
}

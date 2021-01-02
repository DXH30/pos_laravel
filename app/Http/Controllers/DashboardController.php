<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(Request $request) {
        $this->middleware('auth');
    }

    public function page(Request $request) {
        return view('dashboard');
    }

    public function profile(Request $request) {
        return view('profile');
    }

    public function inventory(Request $request) {
        return view('inventory');
    }
}

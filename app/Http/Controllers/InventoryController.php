<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function stock_management(Request $request) {
        if ($request->isMethod('POST')) {
        } else {
            return view('inventory.stock_management');
        }
    }

    public function track_order(Request $request) {
        if ($request->isMethod('POST')) {
        } else {
            return view('inventory.track_order');
        }
    }

    public function requests(Request $request) {
        if ($request->isMethod('POST')) {
        } else {
            return view('inventory.requests');
        }
    }
}

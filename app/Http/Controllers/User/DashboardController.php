<?php

namespace App\Http\Controllers\User;

use App\CustomOrder;
use App\MadePrice;
use App\ProductBooking;
use Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $bookings = CustomOrder::where('user_id', Auth::id())->get();
        $product_bookings = ProductBooking::where('user_id', Auth::id())->get();
        $prices = MadePrice::all();
       return view('backend.multi-dashboard.user._home_user', compact('bookings', 'product_bookings', 'prices'));
    }

    public function custom_booking()
    {
        return view('backend.multi-dashboard.user._custom_booking');
    }
}

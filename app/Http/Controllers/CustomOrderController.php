<?php

namespace App\Http\Controllers;

use App\CustomOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomOrderController extends Controller
{

    public function index()
    {

        return view('backend.multi-dashboard.user._custom_booking');
    }


      public function statusChangeForBooking($id)
    {
        $data = [ ];
        $data['bookings'] = CustomOrder::find($id);
        return view('backend.booking.change_status', $data);
    }


    public function store(Request $request)
    {

        $customOrders = new CustomOrder();
        $customOrders->user_id = Auth::id();
        $customOrders->body_size = $request->body_size;
        $customOrders->chest_size = $request->chest_size;
        $customOrders->neck_size = $request->neck_size;
        $customOrders->sleeve_size = $request->sleeve_size;
        $customOrders->pant_size = $request->pant_size;
        $customOrders->waist_size = $request->waist_size;
        $customOrders->save();

        return redirect(route('user.dashboard'));
    }


    public function bookingStatusStore(Request $request)
    {
        // Validation Will Here
        $bookings = CustomOrder::findOrfail($request->id)->update([
            'status_name_id' => $request->status_name_id
        ]);

        session()->flash('success','Successfully Updated!');
        return redirect(route('admin.dashboard'));
    }


    public function delete($id)
    {
        $data = [ ];
        $data['bookings'] = CustomOrder::find($id);
        $data['bookings']->delete();
        session()->flash('success','Custom Order Booking Deleted Successfully!');
        return redirect(route('admin.dashboard'));
    }
}

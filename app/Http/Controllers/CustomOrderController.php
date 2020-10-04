<?php

namespace App\Http\Controllers;

use App\CustomOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return view('backend.multi-dashboard.user._custom_booking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function statusChangeForBooking($id)
    {
        $data = [ ];
        $data['bookings'] = CustomOrder::find($id);
        return view('backend.booking.change_status', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomOrder  $customOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomOrder $customOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomOrder  $customOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomOrder $customOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomOrder  $customOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomOrder $customOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomOrder  $customOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomOrder $customOrder)
    {
        //
    }
}

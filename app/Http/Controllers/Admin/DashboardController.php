<?php

namespace App\Http\Controllers\Admin;


use App\CustomOrder;
use App\ProductBooking;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\UserExports;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    // Code Start From Here
    public function index()
    {
        $data = [ ];
        $data['booking_all'] = CustomOrder::orderBy('created_at', 'desc')->get();
        $data['product_bookings'] = ProductBooking::all();

        return view('backend.admin.dashboard', $data);
    }



    public function showAllUser()
    {

        $details_user = User::where('role_id',4)->get();
        return view('backend.admin.alluser',compact('details_user'));
    }


    public function destroy ($id)
    {
        User::where('id', $id)->delete();

        session()->flash('warning','User Deleted Successfully!');
        return redirect()->route('admin.showAllUser');
    }



    public function exportUser(Request $request)
    {
    //  Code for 3.1.19 version
        return Excel::download(new UserExports, 'users.xlsx');
    }



}

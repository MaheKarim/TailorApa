<?php

namespace App\Http\Controllers;

use App\MadePrice;
use Illuminate\Http\Request;

class MadePriceController extends Controller
{

    public function index()
    {
        $prices = MadePrice::all();
        return view('backend.product_price.product_price_view', compact('prices'));
    }


    public function add()
    {
        return view('backend.product_price.product_price_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dress_name' => 'required',
            'dress_price' =>  'required',
            'dress_making_day'  => 'required',
        ]);

        $prices = new MadePrice();
        $prices->dress_name = $request->dress_name;
        $prices->dress_price = $request->dress_price;
        $prices->dress_making_day = $request->dress_making_day;
        $prices->save();

        session()->flash('success','Product Making Price Created successfully!');
        return redirect(route('makingPriceShow'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MadePrice  $madePrice
     * @return \Illuminate\Http\Response
     */
    public function show(MadePrice $madePrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MadePrice  $madePrice
     * @return \Illuminate\Http\Response
     */
    public function edit(MadePrice $madePrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MadePrice  $madePrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MadePrice $madePrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MadePrice  $madePrice
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = [ ];
        $data['prices'] = MadePrice::find($id);
        $data['prices']->delete();
        session()->flash('success','Deleted Successfully!');
        return redirect(route('makingPriceShow'));
    }
}

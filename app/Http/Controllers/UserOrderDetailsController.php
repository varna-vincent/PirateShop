<?php

namespace App\Http\Controllers;

use App\UserOrderDetail;
use Illuminate\Http\Request;

class UserOrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'orderid' => 'bail|required',
            'name' => 'required',
            'phone' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required'
        ]);

        $userOrderDetail = UserOrderDetail::where('order_id', $request->orderid)->first();

        if($userOrderDetail == null) {
            $userOrderDetail = new UserOrderDetail();
            $userOrderDetail->order_id = $request->orderid;
        }
        $userOrderDetail->name = $request->name;
        $userOrderDetail->phone = $request->phone;
        $userOrderDetail->shipping_address_1 = $request->address1;
        $userOrderDetail->billing_address_1 = $request->address1;
        $userOrderDetail->shipping_address_2 = $request->address2;
        $userOrderDetail->billing_address_2 = $request->address2;
        $userOrderDetail->shipping_city = $request->city;
        $userOrderDetail->billing_city = $request->city;
        $userOrderDetail->shipping_state = $request->state;
        $userOrderDetail->billing_state = $request->state;
        $userOrderDetail->shipping_country = $request->country;
        $userOrderDetail->billing_country = $request->country;
        $userOrderDetail->shipping_zipcode = $request->zip;
        $userOrderDetail->billing_zipcode = $request->zip;

        $userOrderDetail->save();

        return $userOrderDetail;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserOrderDetail  $userOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrderDetail $userOrderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserOrderDetail  $userOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrderDetail $userOrderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserOrderDetail  $userOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOrderDetail $userOrderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserOrderDetail  $userOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrderDetail $userOrderDetail)
    {
        //
    }
}

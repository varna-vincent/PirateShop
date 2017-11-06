<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
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
            'productid' => 'bail|required',
            'price' => 'required',
            'discount' => 'required',
            'name' => 'required'
        ]);

        $order = Order::where('user_id', auth()->user()->id)->where('status', 'cart')->first();

        if($order == null) { 
            $order = auth()->user()->addToCart(request(['status']));
        }

        $orderproduct = OrderProduct::where('order_id', $order->id)->where('product_id', request(['productid']))->first();

        if($orderproduct == null) { 

            $orderproduct = $order->orderproducts()->create([
                'product_id' => $request->productid,
                'order_id' => $order->id,
                'quantity' => 1,
                'price' => $request->price,
                'discount' => $request->discount,
                'name' => $request->name
            ]);
        } else {

            $orderproduct->quantity = $orderproduct->quantity + 1;
            $orderproduct->save();
        }

        return compact('order','orderproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $userid)
    {
        $orders = Order::with('orderproducts')->where('user_id', $userid)->where('status', $request->input('status'))->get();
        return $orders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $message = null;
        $orderproducts = OrderProduct::where('order_id', $order->id)->get();

        foreach ($orderproducts as $orderproduct) {

            $product = Product::where('id', $orderproduct->product_id)->first();
            if($product->available_count >= $orderproduct->quantity) {
                $product->available_count = $product->available_count - $orderproduct->quantity;
                $product->save();

            } else {
                $message = "NA";
                return compact('product', 'message');
                break;
            }
        }

        $order->status = $request->input('status');
        $order->save();

        return compact('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

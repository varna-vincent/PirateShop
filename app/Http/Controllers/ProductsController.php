<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct() {

        $this->middleware('auth')->except(['index','show', 'update']);
    }

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
            'name' => 'bail|required',
            'type' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'count' => 'required'
            ]);

        $product = Product::create(['name' => $request->name,
                                'type' => $request->type,
                                'price' => $request->price,
                                'discount' => $request->discount,
                                'available_count' => $request->count,
                                'actors' => $request->actors,
                                'directors' => $request->directors,
                                'writers' => $request->writers,
                                'producers' => $request->producers,
                                'format' => $request->format,
                                'language' => $request->language,
                                'subtitles' => $request->subtitles,
                                'rated' => $request->rated,
                                'studio' => $request->studio,
                                'runtime' => $request->runtime]);

        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

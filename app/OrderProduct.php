<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
	protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'discount', 'name'];

    public function order() {
    	return $this->belongsTo(Order::class);
    }

    public function products() {
    	return $this->hasMany(Product::class);
    }
}

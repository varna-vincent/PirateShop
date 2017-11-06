<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrderDetail extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'order_id', 'phone', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_state', 'shipping_country', 'shipping_zipcode', 'billing_address_1', 'billing_address_2', 'billing_city', 'billing_state', 'billing_country', 'billing_zipcode'
    ];

    public function order() {
    	return $this->belongsTo(Order::class);
    }
}

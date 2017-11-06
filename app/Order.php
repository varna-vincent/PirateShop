<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['user_id', 'status', 'ordered_on'];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function orderproducts() {
    	return $this->hasMany(OrderProduct::class);
    }
}

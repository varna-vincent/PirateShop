<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function isAdmin() {
        return ($this->role === 'admin') ? true : false; // this looks for a role column in your users table
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function addToCart($order) {
        return $this->orders()->create($order);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'shipping_address_1', 'shipping_address_2', 'shipping_city', 'shipping_state', 'shipping_country', 'shipping_zipcode', 'billing_address_1', 'billing_address_2', 'billing_city', 'billing_state', 'billing_country', 'billing_zipcode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

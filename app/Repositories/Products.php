<?php

namespace App\Repositories;

use App\Product;

class Products {
	
	public function all() {

        if(request('type') != null) {
            return Product::where('type', request('type'))->get();
        } else {
            return Product::latest()->get();
        }
	}
}
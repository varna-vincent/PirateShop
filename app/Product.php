<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['name', 'type', 'price', 'discount', 'available_count', 'actors', 'directors', 'writers', 'producers', 'format', 'language', 'subtitles', 'rated', 'studio', 'runtime', 'release_date'];

    public function order() {
    	return $this->belongsTo(OrderProduct::class);
    }
}

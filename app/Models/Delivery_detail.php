<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_detail extends Model
{
    use HasFactory;

    protected $table = 't_delivery_detail';

    function po() {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    function produk() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

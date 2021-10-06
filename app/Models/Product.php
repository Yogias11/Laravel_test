<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'm_product';

    function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function type() {
        return $this->belongsTo(Type::class, 'type_id');
    }
}

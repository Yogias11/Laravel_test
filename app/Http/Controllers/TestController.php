<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Delivery_detail;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        $product = Delivery_detail::all();
        return view('test.index', compact('product'));
    }

    function pola(){
        return view('test.pattern');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    function shop(){
        $products = Product::all();
        return view('user.shop',compact('products'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    function add(Request $request, $id){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        $cart->quantity = $request->quantity;
        $cart->unit_price = $request->unit_price;
        $cart->save();
        return redirect()->back()->with('status', 'Succesfully Added');
    }

    function showDetails(){
        $details = Cart::all();
        return view('user.dashboard.cart.cart', compact('details'));
    }

    function delete($id){
        $finds = Cart::find($id);
        $finds->delete();
        return redirect()->back()->with('status', 'deleted');
    }
}

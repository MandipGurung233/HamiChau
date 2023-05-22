<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaing;
use App\Models\Subscribe;
use App\Models\Product;

class UserController extends Controller
{
    function index(){
        $campaings = Campaing::all();
        $shops = Product::all();
        return view('user.index',compact('campaings','shops'));
    }
    
    function blog(){
        return view('user.blog');
    }

    function cause(){
        $campaings = Campaing::all();
        return view('user.cause',compact('campaings'));
    }

    function causes($id){
        $campaings = Campaing::all();
        $category = $id;
        return view ('user.categoryCause',compact('campaings','category'));
    }
    
    function service(){
        return view('user.service');
    }

    function dashboard(){
        return view ('user.dashboard.index');
    }

    function subscribe(Request $request){
        $email = new Subscribe();
        $email->email= $request->email;
        $email->save();
        return back();
    }

    function subscription(){
        $emails = Subscribe::all();
        return view('admin.subscribe.index',compact('emails'));
    }

}
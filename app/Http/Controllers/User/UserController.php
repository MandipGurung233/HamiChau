<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaing;

class UserController extends Controller
{
    function index(){
        $campaings = Campaing::all();
        return view('user.index',compact('campaings'));
    }

    function blog(){
        return view('user.blog');
    }

    function cause(){
        $campaings = Campaing::all();
        return view('user.cause',compact('campaings'));
    }
    
    function service(){
        return view('user.service');
    }
}
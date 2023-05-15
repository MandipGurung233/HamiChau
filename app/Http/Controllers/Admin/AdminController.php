<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaing;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function paymentDetails(){
        $payments = Payment::all();
        $users = User::all();
        $campaings = Campaing::all();
        return view('admin.payment.paymentDetails',compact('payments'));
    }
}

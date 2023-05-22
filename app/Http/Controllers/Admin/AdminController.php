<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaing;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function index1()
    {
        $categories = Category::all();
        $campaings = Campaing::all();

        return view('admin.campaings.index', compact('categories', 'campaings'));
    }

    function approve($id){
        $approve = Campaing::find($id);
        $approve->status = 'approved';
        $approve->update();
        return back()->with('status', 'Successfully approved');
    }

    function view($id){
        $value =Campaing::find($id);
        return view('viewFile',compact('value'));
    }
}
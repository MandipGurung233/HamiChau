<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Campaing;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    function createPayment(Request $request,$id){
        $payment = new Payment();
        $payment->user_id = Auth::user()->id;
        $payment->amount = $request->amount;
        $payment->campaing_id = $id;
        $payment->save();

        $url = 'pay-with-khalti/'.$request->amount.'/'.$payment->id;
        return redirect($url);
    }

    function payWithKhalti($amount,$id)
    {
        return view('user.payWithKhalti',compact('amount','id'));
    }

    function changePaymentStatus($id){
        $payment = Payment::find($id);
        $payment->status = 'paid';
        $payment->update();

        $campaing = Campaing::where('id',$payment->campaing_id)->first();
        $campaing->campaing_total_amount_collected += $payment->amount;
        $campaing->save();

        return redirect('/')-with('message','Thank you for your support');
    }
}

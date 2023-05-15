@extends('admin.layouts.main')
@section('content')
<h3> - Payment details</h3>
<div class="container">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>User Name</th>
            <th>Campaing_name</th>
            <th>Amount</th>
            <th>Raised_amount</th>
            <th>Status</th>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{$payment->id}}</td>
               
                <td>{{$payment->user['name']}}</td>
              
                <td>{{$payment->campaing['campaing_name']}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->campaing['campaing_total_amount_collected']}}</td>
                <td>{{$payment->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection